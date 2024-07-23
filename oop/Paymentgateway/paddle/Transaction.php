<?php

namespace Paymentgateway\paddle;
use Paymentgateway\Notification\Email;
class Transaction
{
    public function __construct()
    {
      var_dump(new CustomerProfile()); echo'<br>';
      var_dump(new \DateTime()); echo '<br>';
      $this->TransactionID = random_bytes(16); echo '<br>';
      var_dump(new Email('555','paid'));
    }
}