<?php

include 'oop/Class.php';

$instanc = new Cat('shanjoma','ahmed',225);

$instanc->AddTax(10)->AddDiscount(4);
echo $instanc->get_name();
echo '<br>';

echo $instanc->get_price();
echo '<br>';

echo $instanc->get_owener_name();




echo '<br>';



$calc = new test(10);


var_dump($calc->sum(5)->sub(1));

///// convert json into object (std class)

$json = '{"a":1,"b":2 , "c":3}';

$obj = json_decode($json);

echo '<br>';
var_dump($obj);
