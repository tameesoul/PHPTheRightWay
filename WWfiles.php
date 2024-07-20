<?php

$dirs = scandir(__DIR__);

foreach($dirs as $dir)
{
    if($dir == '.' || $dir == '..') continue;
    echo $dir.'<br>';  //prints all files and directories in the current directory excluding . and ..
    // you can add more conditions to filter the directories or files as per your requirement.
}
echo '<br>';
var_dump($dirs[2]);

// echo '<pre>';
// var_dump($dir);
// echo '</pre>';

mkdir('foo',777);
rmdir('foo');

touch('foo.php',777);


if(file_exists('foo.php'))
{
    echo 'file exists';
}