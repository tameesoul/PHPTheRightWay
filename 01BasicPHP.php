<?php
// print
echo "hello,world"; /// one way to print , most efficient
echo "<br>";
print "hello,world"; /// other way to print , return 1 ;

// variable declaration

$name = "ahmed";
echo "<br>";
echo 'hello'.' '.$name;

echo "<br>";
// value vs reference 

$x = 10;
$y = $x;
$x = 20;
echo $y; /// 10 assigned by value;
echo "<br>";
$x = 10;
$y = &$x;
$x = 20;
echo $y; /// 20 assigned by reference;
echo "<br>";

/// comment 

//// one way ;
#  other way 

/*
 multi line comment
*/


