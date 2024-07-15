<?php



///Arithemtic Operation
///(+,-,*,/,**);

$x = 10;
$y = 10;
var_dump($x+$y);


echo "<br>";


//Assignments Operators (= += -= !=)

$x = $y =10;

var_dump($x , $y);

echo "<br>";
///Comparison Operators(== , === , != !=== , <>  ,<= , => ,?? , ?:)


$x = 10 ? "found" : "not found";

echo $x;


////////Error Control Operators(@)
$x = @file("foot.php");
///bitwise Operators(&)

$x = 3;
$y = 2;
echo '<br>';
var_dump($x & $y);
echo '<br>';
var_dump($x | $y);

/// arrayOperators(+,===,==)
$x = ['a','b','c'];
$y = ['e','f','g','h','i'];

$z = $x + $y; /// union 

print_r($z); // ( [0] => a [1] => b [2] => c ) 

