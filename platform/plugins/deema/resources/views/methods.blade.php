@if (get_payment_setting('status', DEEMA_PAYMENT_METHOD_NAME) == 1)
    <x-plugins-payment::payment-method
        :name="DEEMA_PAYMENT_METHOD_NAME"
        paymentName="Deema"
    />
@endif
