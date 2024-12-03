<?php

class MyClass {
    function __construct() {
        echo "Objek telah dibuat.<br>";
    }
    
    function __destruct() {
        echo "Objek telah dihancurkan.<br>";
    }
}

$obj = new MyClass(); // Constructor dipanggil
unset($obj); // Destructor dipanggil

// Menutup koneksi database yang terbuka.
// Menghapus file atau resource lain yang sudah tidak diperlukan.
// Membersihkan memori jika objek menggunakan resource yang mahal seperti file atau jaringan.