<?php

namespace Paymentgateway\paddle;
class CustomerProfile
{
    public function __construct()
    {
        $this->customerId = bin2hex(random_bytes(16));
    }
}