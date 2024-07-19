<?php


////array_chunk
$array1 = [
    'a'=>1,
    'b'=>2,
    'c'=>3,
    'd'=>4
];


$test = array_chunk($array1,2);
echo '<pre>';
print_r($test);
'</pre>';

//output
/* Array
(
    [0] => Array
        (
            [0] => 1
            [1] => 2
        )

    [1] => Array
        (
            [0] => 3
            [1] => 4
        )

)
 */


 ///array combine


 $array_1 = ['a','b','c'];
 $array_2  = [1,2,3];

 $test = array_combine($array_1,$array_2);
echo '<br>';
echo '<pre>';
print_r($test);
'</pre>';

//output
/* 
Array
(
    [a] => 1
    [b] => 2
    [c] => 3
)
*/

//array_filter 

$array = [1,2,3,4,5,6,7,8,9,10];

$test = array_filter($array,fn($item)=>$item%2==0);

echo '<br>';
echo '<pre>';
print_r($test);
echo '</pre>';


///search for a key in hashmap


$array = [
    'a'=>1,
    'b'=>5,
    'c'=>10,
    'e'=>10
];


$test = array_keys($array,10);

echo '<br>';
echo '<pre>';
print_r($test);
echo '</pre>';



//merge_array

$array1 = [1,2,3];
$array2 = [4,5,6];

$test = array_merge($array1,$array2);

echo '<br>';

echo '<pre>';

print_r($test);

echo '</pre>';

///array_search

$array = ['a','b','c','d','e','f','g'];

echo '<br>';

echo '<pre>';

print_r(array_search('b',$array));

echo '</pre>';





