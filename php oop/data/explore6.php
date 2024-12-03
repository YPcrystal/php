<?php

// Trait
// Trait adalah mekanisme untuk menggunakan kembali kode dalam kelas yang berbeda tanpa menggunakan inheritance.
// PHP memungkinkan kelas untuk menggunakan beberapa trait.

trait Logger {
    public function log($message) {
        echo "Logging: $message<br>";
    }
}

trait Notifier {
    public function notify($message) {
        echo "Notifying: $message<br>";
    }
}

class User {
    use Logger, Notifier;
}

$user = new User();
$user->log("User created");
$user->notify("Welcome email sent");

// Menghindari duplikasi kode tanpa memperumit hierarki kelas.
// Memungkinkan penggunaan kode lintas kelas tanpa memaksa hubungan antar kelas.