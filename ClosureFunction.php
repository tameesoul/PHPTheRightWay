<?php
//Variable, Anonymous, Callable, Closure & Arrow Functions


// variable Function


function sum(...$numbers)
{
    return array_sum($numbers);
}

$x = 'sum';

if(is_callable($x)) /// check if the function name is exist
{
   // echo $x(1,2,3,4,5); // 15
}else
{
    //echo "Not a callable function";
}

//Anonymous


$x =10;
$sub = function($array2, ...$numbers) use($x) :float | int
{
    echo $x;
    $sub = array_shift($numbers);
    foreach($numbers as $number)
    {
        $sub -=$number;
    }
    return $sub;
}; /// end with semicol


 /// callback function

 $array = [1,3,4,5,6];

 $array2= array_map(function($element){
    return $element * 3;
 },$array);
echo '<pre>';
 print_r($array);
 echo '</pre>';
echo '<pre>';
 print_r($array2);
 echo '</pre>';



 ////arrow fn


$array = [1,2,3,4];

$array2= array_map(fn($item)=>$item * $item,$array);

print_r($array2);





