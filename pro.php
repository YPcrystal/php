<?php
$list = [];

while (true) {
    echo "1. kuliah\n";
    echo "2. kerja\n";
    echo "3. menikah\n";
    echo "4. Keluar\n";
    echo "Pilih menu: ";
    $menu = trim(fgets(STDIN));

    if ($menu == "1") {
        echo "Masukkan umur kamu : ";
        $umur = trim(fgets(STDIN));
        $batasan_umur = "21";
        if ($umur < $batasan_umur) {
            echo "apakah di umur $umur ini kamu sudah meluruskan niat untuk kuliah? ?\n";
        } else {
             echo "haii, di umur $umur apa yang akan kamu lakukan ?\n";
        }
    } elseif ($menu == "2") {
        echo "Daftar Item:\n";
        foreach ($list as $key => $value) {
            echo ($key + 1) . ". $value\n";
        }
    } elseif ($menu == "3") {
        echo "Keluar dari program.\n";
        break;
    } else {
        echo "Pilihan tidak valid.\n";
    }
}
?>


