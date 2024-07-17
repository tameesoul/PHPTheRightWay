<?php



$x = 10;


function foo()
{
    $GLOBALS['x'] = 5; ///superglobal
   echo $GLOBALS['x']; /// store the varible name as key and his value as value in hashtable
}


foo();
echo $x;

