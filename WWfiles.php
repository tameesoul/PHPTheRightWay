<?php 


$file = fopen('index.php','r');

// while(($line = fgetcsv($file)) !== false )
// {
//     echo '<pre>';
//     print_r($line) . '<br>';
//     '</pre>';
// }

$content = [
    0 => file_get_contents('index.php')
];




echo '<pre>';
print_r($content);

echo '</pre>';


