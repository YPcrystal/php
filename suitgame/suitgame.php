<?php

// include a separate for utility function
include 'functions.php';

//menyambut sang pemain
echo "Selamat datang di permainan 'Gunting Batu Kertas'!\n";
echo "Pilih salah satu: Gunting, Batu, atau Kertas\n";
echo "Saya akan memilih secara acak, dan kamu harus menebak pilihan saya!\n";
echo "Ayo mulai!\n";

// definisi pilihan permainan
$choices = array("gunting", "batu", "kertas");

// fungsi pilihan acak
function generateRandomSwitch($choices) {
    return $choices[array_rand($choices)];
}

// 
$attempts = 0;
$guessedCorrectly = false;

// main game loop
while(!$guessedCorrectly) {
    // input pemain
    echo "Pilih salah satu: Gunting, Batu, atau Kertas\n";
    $input = trim(fgets(STDIN)); //using super global 'STDIN' for CLI input

    // validate input
    if (!in_array($input, $choices)) {
        echo "Kamu Salah Memilih. Silahkan Tentukan pilihanmu Kembali!.\n";
        continue;
    }

    $guess = (string) $input;
    $attempts++;

    // pilihan acak komputer
    $randomSwitch = generateRandomSwitch($choices);

    // check tebakan
    if ($guess === $randomSwitch) {
      echo "Selamat Anda Telah Berhasil Memenangkan Permainan Ini dalam $attempts percobaan.\n";
    } else {
        echo "Pilihanmu: $guess dan pilihan saya: $randomSwitch. Silahkan coba lagi\n";
    }
}

// Display stats 
echo "Terimakasih atas partisipasinya untuk mengikuti game ini! Sampai jumpa lagi!.\n";
displayGameStats();