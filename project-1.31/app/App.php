<?php
declare(strict_types = 1);

$file = fopen(FILES_PATH . 'sample_1.csv', 'r');
$headers = fgetcsv($file);

$datas = [];
while (($row = fgetcsv($file)) !== false) {
    $datas[] = array_combine($headers, $row);
}

fclose($file);
