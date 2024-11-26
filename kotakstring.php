<?php

// 1. Baca input
echo "Masukkan input: ";
$input = trim(fgets(STDIN));

// 2. Pecah input berdasarkan koma
$input = explode(",", $input); 

// 3. Ubah array menjadi integer
foreach ($input as $key => $value) {
    $input[$key] = (int) trim($value); 
}

var_dump($input);

// 4. Hitung jumlah elemen array
$jumlahElemen = count($input);

// 5. Hitung total elemen array
$total = 0;
foreach ($input as $value) {
    $total += $value; // Penjumlahan elemen array
}

var_dump($total);  

// 6. Hitung rata-rata dengan rumus: total / jumlah elemen array
if ($jumlahElemen > 0) {
    $rataRata = $total / $jumlahElemen;
} else {
    $rataRata = 0; // Tangani kasus array kosong
}

// 7. Tampilkan hasil
echo "Total elemen array: $jumlahElemen\n";
echo "Total array: $total\n";
echo "Rata-rata dari input: $rataRata\n";
