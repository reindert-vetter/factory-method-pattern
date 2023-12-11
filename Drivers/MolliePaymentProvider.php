<?php

namespace Drivers;

use Contracts\PaymentProviderInterface;

class MolliePaymentProvider implements PaymentProviderInterface
{
    public function isPaid(): bool
    {
        return true;
    }
}