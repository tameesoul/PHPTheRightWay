<?php

///break
$i = 0;

while(true) :
{
    while($i>10)
    {
        break 2;
    }
    echo $i++;
}

endwhile;

echo "<br>";
echo "<br>";
echo "<br>";

//foreach

$programingLanguages = ['php','cpp','python','rust'];

foreach($programingLanguages as $key=>&$Languages)
{
    echo  $key .':'. $Languages."<br>"; 
}

echo $Languages; // rust


echo "<br>";
echo "<br>";

///work with hashmap

$users = [
    'name'=>'ahmed',
    'mail'=>'ahmed@.com',
    'age'=>21,
    'skills'=>['php','mysql','laravel']
];


foreach($users as $key=>$value)
{
    if(is_array($value))
    {
        $value = implode('-',$value);/// convert array to string
    }
    echo $key.':'.$value .'<br>';
}


