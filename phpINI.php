<?php

/// php ini 



//ini_set();///set Config
//ini_get()///get Config


//error_logs

//var_dump(ini_set('error_log', 'error.log'));

///memory_limts


// var_dump(ini_set('memory_limit', '512M'));

// $x='hello';
// for($i = 0 ;$i<1000;$i++)
// {
//     $x.=$x;
// }

//echo $x;

//file_uploads

//var_dump(ini_set('file_uploads', '1'));

//error handle


error_reporting(E_ALL);// SHOW all errors;
//error_reporting(0); // show no error

/// create manual error handler;



function errorHandler(int $type , string $msg , ?string $line = null  )
{
    echo "Error : $msg , Type : $type , Line : $line <br>";
    exit;
}


set_error_handler('errorHandler',E_ALL);
echo $z;