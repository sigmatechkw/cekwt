<?php 

namespace Botble\Deema\Http\Controllers;

use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Botble\Payment\Supports\PaymentHelper;
use Botble\Payment\Enums\PaymentStatusEnum;


class DeemaController extends BaseController { 
    public function callback(Request $request, BaseHttpResponse $response) 
    { 
        $reference = $request['reference'];

        try {
            $client = new Client();
            $apiSecret = get_payment_setting('api_key', DEEMA_PAYMENT_METHOD_NAME);
            $isLive = get_payment_setting('mode', DEEMA_PAYMENT_METHOD_NAME) ? 'https://api.deema.me' : 'https://sandbox-api.deema.me';
            
            $responseRequest = $client->get("$isLive/api/merchant/v1/purchase/$reference/retrieve_by_reference", [
                'headers' => [
                    'Authorization' => 'Basic '. $apiSecret,
                    'Accept'        => 'application/json',
                ],
            ]);
            
            $responseBody = $responseRequest->getBody()->getContents();
            $result = json_decode($responseBody, true);

            do_action('payment_after_api_response', DEEMA_PAYMENT_METHOD_NAME, ['payment_id' => $result['data']['merchant_order_id']], (array) $result);

            $status = $result['data']['status'] === 'fully_captured' ? PaymentStatusEnum::COMPLETED : PaymentStatusEnum::FAILED;

            if($status === PaymentStatusEnum::COMPLETED) { 
                do_action(PAYMENT_ACTION_PAYMENT_PROCESSED, [
                    'amount' => $result['data']['amount'],
                    'currency' => $result['data']['currency_code'],
                    'charge_id' => $result['data']['merchant_order_id'],
                    'payment_channel' => DEEMA_PAYMENT_METHOD_NAME,
                    'status' => $status,
                    'customer_id' => null,
                    'customer_type' => null,
                    'payment_type' => 'direct',
                    'order_id' => (array) $result['data']['merchant_order_id'],
                ]);
        
                return $response
                    ->setNextUrl(PaymentHelper::getRedirectURL())
                    ->setMessage(__('Checkout successfully!'));
            }

            return $response
                ->setError()
                ->setNextUrl(PaymentHelper::getCancelURL())
                ->setMessage('Checkout Failed');

        }catch(Exception $exception) { 
            return $response
                ->setError()
                ->setNextUrl(PaymentHelper::getCancelURL())
                ->setMessage($exception->getMessage());
        }
    }
}