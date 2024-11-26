<?php

// Baca input
echo "Masukkan input: ";
$input = trim(fgets(STDIN));

// Pecah input menjadi array
$array = explode(",", $input);

// Ubah elemen array menjadi integer
foreach ($array as $key => $value) {
    $array[$key] = (int) trim($value);
}

// Hitung jumlah array
$total = 0;
foreach ($array as $value) {
    $total = $total + $value;
} 
var_dump($total);

// Hitung rata-rata
$jumlahElemen = count($array);
$rataRata = $jumlahElemen > 0 ? $total / $jumlahElemen : 0;

// Tampilkan hasil
echo "Total elemen array: $jumlahElemen\n";
echo "Total array: $total\n";
echo "Rata-rata dari input: $rataRata\n";
