<?php

$values = array (10, 9, 8, 7.5);
var_dump($values);

for (
    $i=0;
    $i < 4;
    $i = $i + 1 
 ) {
    echo "Data ke $i = $values[$i]".PHP_EOL;
}