<?php

namespace Drivers;

use Contracts\PaymentProviderInterface;

class StripePaymentProvider implements PaymentProviderInterface
{
    public function isPaid(): bool
    {
        return true;
    }
}