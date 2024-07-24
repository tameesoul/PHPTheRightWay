<?php
include 'vendor/autoload.php';


use app\Paymentgateway\paddle\Transaction;
use Ramsey\Uuid\Nonstandard\Uuid;
use Ramsey\Uuid\UuidFactory;


$paddelTranscation = new Transaction();
 ///PAID output
echo '<br>';
echo '<br>';

var_dump($paddelTranscation->SetStatus("PAID"));
//echo Transaction::class; /// MagicConst print all the class path "app\Paymentgateway\paddle\Transaction"
echo '<br>';


echo $paddelTranscation::set_count(1);
echo $paddelTranscation::set_count(2);
echo $paddelTranscation::set_count(2);
echo $paddelTranscation::set_count(2);

echo '<br>';
echo Transaction::$count; // cached value 2  


