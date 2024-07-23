<?php



namespace Paymentgateway\Notification; 

class Email
{
    public function __construct( public $transactionId,  public $status)
    {
        echo "Email notification sent for transaction $transactionId with status $status";
    }
}

