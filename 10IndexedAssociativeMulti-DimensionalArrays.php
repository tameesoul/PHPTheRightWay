<?php

//// define an array 

$programming = ['php','java','cpp'];
$programming2 = array('php','java','cpp');
echo "<pre>";
print_r($programming);
echo "</pre>";
echo "<br>";

echo $programming[0]; // access index in the array; index bases is numeric numbers by default;
echo "<br>";

// isset to check if there ara item in the array;

if(isset($programming[2]))
{
 echo $programming[2];

}else
{
    echo " void";
}


echo "<br>";
/// count the array;

echo count($programming);

// pushing element to the array;

$programming[] = "python";


echo "<br>";
echo "<pre>";
print_r($programming);
echo "</pre>";

/// other way to push 

array_push($programming,'ruby','c');

echo "<br>";
echo "<pre>";
print_r($programming); // key can be string or , number 
echo "</pre>";


///keyvalue array , hashtable , search o(1);

$programming3 = [
    'php'=>7, 
    'python'=>4.4,
    'cpp'=>17
];

echo $programming3['php']; // access by the key o(1);

echo "<br>";
echo "<pre>";
print_r($programming3); 
echo "</pre>";

///push to hashmap

$programming3['go']=5;
echo "<br>";
echo "<pre>";
print_r($programming3); 
echo "</pre>";


$newlang = "c#";
$programming3[$newlang] = 8;
echo "<br>";
echo "<pre>";
print_r($programming3); 
echo "</pre>";


$programming4 = [
    'php'=>[
        '2010'=>1.0,
        '2012'=>2.2,
        '2020'=>'laravel'
    , 
    [
        'open_source'=>true,
        'creator'=>'blah blah'
        ]
    ],
    
    /// array in the array
    'python'=>[
        'opensource'=>true,
        'versions'=>[
            '2010'=>[
               'oct'=>1, 
               'nov' =>4,
               'dec'=>33
            ],
            '2020'=>[
                'oct'=>44,
                'dec'=>'44'
            ]
        ]
    ],

    'cpp'=>17
];

echo "<br>";

echo "<pre>";
print_r($programming4);

echo "</pre>";

echo "<br>";
echo $programming4['python']['versions']['2020']['dec'];

/// if there are two values has the same index last one will override 


echo "<br>";

$test = [0=>'foo',1=>'bar',1=>'baz'];


echo '<pre>';
print_r($test);
echo '</pre>'; 

///remove element from the array;
echo "<br>";

echo array_pop($test);
echo '<pre>';
print_r($test);
echo '</pre>';


//remove the array

//unset($test);

print_r($test);

//casting


$x = 'foo';

echo '<br>';

echo var_dump((array)$x);

///array_key_exists
echo '<br>';


echo array_key_exists('0',$test); /// key , name of the array; // 1 key exists but can the value be null
echo '<br>';

echo isset($test['0']); ///1 /// value cant be null


