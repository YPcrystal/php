<?php

// include a separate for utility function
include 'functionsgame.php';

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

// skor
$playerscore = 0; //skor pemain
$computerscore = 0; //skor komputer 
$maxscore = 3; //batasan skor
$attempts = 0;

// main game loop
while($playerscore < $maxscore && $computerscore < $maxscore) {
   
    // input pemain
    echo "Pilih salah satu: Gunting, Batu, atau Kertas:\n";
    $input = strtolower(trim(fgets(STDIN)));

    // validate input
    if (!in_array($input, $choices)) {
        echo "Kamu Salah Memilih. Silahkan coba lagi!.\n";
        continue;
    }

    // pilihan acak komputer
    $computerchoice = generateRandomSwitch($choices);

    // tampilan pilihan
    echo "Pilihanmu: $input\n";
    echo "Pilihan Komputer: $computerchoice\n";

    // menentukan pemenang
    if ($input === $computerchoice) {
      echo "Hasil: Seri! Tidak ada skor tambahan.\n";
    } else if (
        ($input === "batu" && $computerchoice === "gunting") ||
        ($input === "gunting" && $computerchoice === "kertas") ||
        ($input === "kertas" && $computerchoice === "batu")
    ) {
        echo "Hasil: Selamat. Kamu menang!\n";
        $playerscore++;
    } else {
        echo "Hasil: PIlihanmu salah. Komputer menang!\n";
        $computerscore++;
    }
    
// menampilkan skor
echo "Skor anda saat ini [$playerscore] - [$computerscore]\n";
$attempts++; //menambah jumlah percobaan
}

//menetukan skor akhir
if ($playerscore === $maxscore) {
    echo "Selamat! Kamu memenangkan game ini dengan skore [$playerscore] - [$computerscore]\n";
} else {
    echo "Sayang sekali. komputer memenangkan game ini dengan skore [$computerscore] - [$playerscore]\n";
}


// Display stats 
saveGameStats($playerscore, $computerscore, $attempts);
displayGameStats();
echo "Terimakasih atas partisipasinya untuk mengikuti game ini! Sampai jumpa lagi!.\n";