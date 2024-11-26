<?php

echo "masukkan input anda : ";
$input = trim(fgets(STDIN));

for (
    $i = $input;
    $i >= 1;
    $i = $i - 1
) {
    echo " ";
    echo $i ;
};