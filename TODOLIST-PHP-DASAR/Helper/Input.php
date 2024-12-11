<?php

function input(string $info): string
{
    echo "$info : ";
    $result = fgets(STDIN);
    return trim($result);
}

// helper bertugas sebagai pembantu
// yang berisi fungsi tambahan seperti program