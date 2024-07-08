<?php
 /// one way to make Constants 
 
 define("MAKE_CO","THIS IS CONSTANT");

 echo MAKE_CO; // run time execution

 // another way to make constants 
echo "<br>";
 const MAKE_CO_TWO = "THIS IS CONSTANT TWO"; 
 
 echo MAKE_CO_TWO; //  compile time execution


echo "<br>";
if(true) 
{
    define("MAKE_CO_THREE", "THIS IS CONSTANT THREE");
    echo MAKE_CO_THREE; // run time execution
}
echo "<br>";

/// predefine Constant;

echo PHP_VERSION; // predefined constant
/// magic CONSTANT
echo "<br>";
echo __FILE__; // change when it is need to change or the state of the code 


//Variable Variables

$name = "John";
$$name = "ahmed";
echo "<br>";

echo "$John"; // output ahmed

$$name = "Doe";
echo "<br>";

echo "$John"; // output Doe