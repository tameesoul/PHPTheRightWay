<?php


include 'oop/Paymentgateway/stripe/Transaction.php';
include 'oop/Paymentgateway/paddle/Transaction.php';
include 'oop/Paymentgateway/paddle/CustomerProfile.php';
include 'oop/Paymentgateway/Notification/Email.php';

use Paymentgateway\paddle\Transaction;

var_dump(new Transaction());