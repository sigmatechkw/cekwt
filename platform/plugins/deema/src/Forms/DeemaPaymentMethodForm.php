<?php

namespace Botble\Deema\Forms;

use Botble\Base\Facades\BaseHelper;
use Botble\Base\Forms\FieldOptions\CheckboxFieldOption;
use Botble\Base\Forms\FieldOptions\TextFieldOption;
use Botble\Base\Forms\Fields\OnOffCheckboxField;
use Botble\Base\Forms\Fields\TextField;
use Botble\Payment\Forms\PaymentMethodForm;

class DeemaPaymentMethodForm extends PaymentMethodForm
{
    public function setup(): void
    {
        parent::setup();

        $this
            ->paymentId(DEEMA_PAYMENT_METHOD_NAME)
            ->paymentName('Deema')
            ->paymentDescription(trans('plugins/payment::payment.deema_description'))
            ->paymentLogo(url('vendor/core/plugins/deema/images/deema.png'))
            ->paymentUrl('https://docs.deema.me/')
            ->defaultDescriptionValue(__('You will be redirected to :name to complete the payment.', ['name' => 'Deema']))
            ->paymentInstructions(view('plugins/deema::instructions')->render())
            ->add(
                sprintf('payment_%s_api_key', DEEMA_PAYMENT_METHOD_NAME),
                TextField::class,
                TextFieldOption::make()
                    ->label(trans('plugins/payment::payment.api_key'))
                    ->value(BaseHelper::hasDemoModeEnabled() ? '*******************************' : get_payment_setting('api_key', 'deema'))
            )
            ->add(
                sprintf('payment_%s_mode', DEEMA_PAYMENT_METHOD_NAME),
                OnOffCheckboxField::class,
                CheckboxFieldOption::make()
                    ->label(trans('plugins/payment::payment.live_mode'))
                    ->value(get_payment_setting('mode', DEEMA_PAYMENT_METHOD_NAME, true))
            );
    }
}
