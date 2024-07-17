<?php


function sum($x , $y) : int | array | float /// tell the parser the excpected return 
{
    return $x + $y; 
}


function test(int|float &$x , int|float $y)
{
    if($x%2 == 0)
    {
        $x/=2;
    }
    return $x * $y;
}
$x = 6.0;
$y = 7;


////

///Variadic functions


function sum2(int $x , int $y ,...$numbers)
{
    echo $x + $y + array_sum($numbers);
}

/// named arguments

function multiply(int $x, int $y)
{
    if($x % $y == 0)
    {
        return $x / $y;
    }
    return $x;
};

$x=5; 
$y=3;

//echo multiply(x: $x ,y : $y); 

