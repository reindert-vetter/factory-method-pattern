<?php

use Contracts\PaymentProviderInterface;
use Drivers\MolliePaymentProvider;
use Drivers\StripePaymentProvider;

class PaymentProviderFactory
{
    public static function create(string $providerAlias): PaymentProviderInterface
    {
        switch ($providerAlias) {
            case 'stripe':
                return new StripePaymentProvider();
            case 'mollie':
                return new MolliePaymentProvider();
            default:
                throw new Exception('Payment provider not found');
        }
    }
}