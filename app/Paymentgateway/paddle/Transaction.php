<?php

namespace app\Paymentgateway\paddle;
use app\Paymentgateway\Notification\Email;

use app\Paymentgateway\Enums\Paid;
class Transaction
{

  static public $count = 0; /// belong to the class , not for object 
  private $status;
    public function __construct()
    {
      // var_dump(new CustomerProfile()); echo'<br>';
      // var_dump(new \DateTime()); echo '<br>';
      // $this->TransactionID = random_bytes(16); echo '<br>';
      // var_dump(new Email('555','paid'));

        $this->status = (Paid::PAID_STATUS);      
    }


    public function SetStatus(string $status) : Transaction
    {
      if(!isset(Paid::AllStatus[$status]))
      {
        throw new \Exception('Invalid status');
      }else{
        $this->status = $status;
      }
      return $this;
    }



    public static function set_count(int $count) : int
    {
      self::$count = $count;
      return self::$count;
    }

}