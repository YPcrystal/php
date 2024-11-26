<?php

define("PHI", 3.14) ;
echo "masukkan jari-jari lingkaran : ";
$jarijari = trim(fgets(STDIN));

$luas = PHI * $jarijari * $jarijari;

echo "luas lingkaran dengan jari-jari $jarijari adalah $luas\n";