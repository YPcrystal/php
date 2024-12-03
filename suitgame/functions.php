<?php

// function to generate a random number
function generaterandomNumber($min, $max) {
    return rand($min, $max); 
}

// function to save game stats
function saveGameStats($attempts) {
    $dategame = date('Y-n-d H:i:s'); //used date time functions
    $data ="Game played on $datetime -Attempts: $attempts\n";

    // save to a file
    file_put_contents('game_stats.txt', $data, FILE_APPEND);
}

// FUNCTION to display game stats 
function displayGameStats() {
    if (!file_exists('game_stats.txt')) {;
    echo "No Stats avaible.\n";
    return;
}

$stats = file('game_stats.txt'); //read stats from the file
foreach ($stats as $stat) {
    echo $stat;

}
}