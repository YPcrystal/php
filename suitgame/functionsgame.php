<?php

// fungsi untuk menyimpan statistik
function saveGameStats($playerscore, $computerscore, $attempts) {
    $file = 'game_stats.txt';

    // menyimpan statistik permainan
    $datetime = date('Y-m-d H:i:s'); //waktu permainan
    $data = "Game played on $datetime - Pemain: $playerscore, Komputer: $computerscore - Percobaan: $attempts\n";
    file_put_contents($file, $data, FILE_APPEND);
}

// fungsi untuk menampilkan statistik game
function displayGameStats() {
    $file = 'game_stats.txt';

    if (file_exists($file)) {
        $data = file_get_contents($file);
        echo $data; //menampilkan isi file
    } else {
        echo "Tidak ada statistik game yang tersedia\n";
    }
}