<?php


//Scalar types 

$boy = true; /// bool
$age = 21; /// int
$price = 500.00; // float 
$string = "hello,world";

echo $boy; 
echo '<br>';
echo $age; 
echo '<br>';
echo $price; 
echo '<br>';
echo $string; 
echo '<br>';
/// get type 

echo gettype($age); // int
echo '<br>';

var_dump($string); // string , hello,world;

// compound types 

$array = [1,3,4,5,6,7,"hello",5.77];
echo '<br>';
print_r($array); // array , [1,3,4,5,6,7,"hello",5.77]; kay and value hashtable
