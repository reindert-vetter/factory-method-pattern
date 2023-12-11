<?php

namespace Contracts;

interface PaymentProviderInterface
{
    public function isPaid(): bool;
}