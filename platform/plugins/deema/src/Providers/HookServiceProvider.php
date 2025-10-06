<?php 

namespace Botble\Deema\Providers;

use Botble\Base\Facades\Html;
use Botble\Deema\Forms\DeemaPaymentMethodForm;
use Botble\Payment\Enums\PaymentMethodEnum;
use Botble\Payment\Facades\PaymentMethods;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;

class HookServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        add_filter(PAYMENT_FILTER_ADDITIONAL_PAYMENT_METHODS, [$this, 'registerDeemaMethod'], 2, 2);

        $this->app->booted(function (): void {
            add_filter(PAYMENT_FILTER_AFTER_POST_CHECKOUT, [$this, 'checkoutWithDeema'], 2, 2);
        });

        add_filter(PAYMENT_METHODS_SETTINGS_PAGE, [$this, 'addPaymentSettings'], 2);

        add_filter(BASE_FILTER_ENUM_ARRAY, function ($values, $class) {
            if ($class == PaymentMethodEnum::class) {
                $values['DEEMA'] = DEEMA_PAYMENT_METHOD_NAME;
            }

            return $values;
        }, 23, 2);

        add_filter(BASE_FILTER_ENUM_LABEL, function ($value, $class) {
            if ($class == PaymentMethodEnum::class && $value == DEEMA_PAYMENT_METHOD_NAME) {
                $value = 'Deema';
            }

            return $value;
        }, 23, 2);

        add_filter(BASE_FILTER_ENUM_HTML, function ($value, $class) {
            if ($class == PaymentMethodEnum::class && $value == DEEMA_PAYMENT_METHOD_NAME) {
                $value = Html::tag(
                    'span',
                    PaymentMethodEnum::getLabel($value),
                    ['class' => 'label-success status-label']
                )
                    ->toHtml();
            }

            return $value;
        }, 23, 2);

    }
    

    public function registerDeemaMethod(?string $html, array $data): string
    {
        PaymentMethods::method(DEEMA_PAYMENT_METHOD_NAME, [
            'html' => view('plugins/deema::methods', $data)->render(),
        ]);

        return $html;
    }

    public function addPaymentSettings(?string $settings): string
    {
        return $settings . DeemaPaymentMethodForm::create()->renderForm();
    }

    public function checkoutWithDeema(array $data, Request $request)
    {
        if ($data['type'] !== DEEMA_PAYMENT_METHOD_NAME) {
            return $data;
        }

        $paymentData = apply_filters(PAYMENT_FILTER_PAYMENT_DATA, [], $request);

        try{
            $requestData = [
                'amount'            => number_format((float) $paymentData['amount'], 2, '.', ''),
                'currency_code'     => $paymentData['currency'],
                'merchant_order_id' => (string) $paymentData['order_id'][0],
                'merchant_urls'     => [
                    'success' => route('payments.deema.callback'),
                    'failure' => route('payments.deema.callback')
                ]
            ];

            do_action('payment_before_making_api_request', DEEMA_PAYMENT_METHOD_NAME, $requestData);

            $client = new Client();
            $apiSecret = get_payment_setting('api_key', DEEMA_PAYMENT_METHOD_NAME);
            $isLive = get_payment_setting('mode', DEEMA_PAYMENT_METHOD_NAME) ? 'https://api.deema.me' : 'https://sandbox-api.deema.me';
            
            $response = $client->post("$isLive/api/merchant/v1/purchase", [
                'headers' => [
                    'Authorization' => 'Basic '. $apiSecret,
                    'Accept'        => 'application/json',
                ],
                'json' => $requestData
                ,
            ]);

            do_action('payment_after_api_response', DEEMA_PAYMENT_METHOD_NAME, $requestData, (array) $response);

            $responseBody = $response->getBody()->getContents();
            $responseData = json_decode($responseBody, true);
            
            header('Location: ' . $responseData['data']['redirect_link']);
            exit;
        }catch (Exception $exception) { 
            $data['error'] = true;
            $data['message'] = $exception->getMessage();
        }

        return $data;
    }
}