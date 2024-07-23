<?php


namespace Paymentgateway\stripe;


class Transaction
{
    public function __construct()
    {
      $this->transactionId = bin2hex(random_bytes(16));
    }
}