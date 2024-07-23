<?php
include 'vendor/autoload.php';


use app\Paymentgateway\paddle\Transaction;
use Ramsey\Uuid\Nonstandard\Uuid;
use Ramsey\Uuid\UuidFactory;

$id = new UuidFactory();

echo $id->uuid4();
echo '<br>';
$paddelTranscation = new Transaction();
var_dump($paddelTranscation);