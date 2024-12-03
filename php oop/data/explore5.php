<?php

// Interfaces dan Abstract Classes
// Keduanya adalah cara untuk mendefinisikan kontrak (struktur)
// yang harus diikuti oleh kelas yang mengimplementasikannya.

// Abstract Class: Dapat memiliki metode yang diimplementasikan penuh dan yang abstrak (hanya deklarasi).
// Interface: Hanya mendeklarasikan metode (semua public).
// Semua metode harus diimplementasikan oleh kelas yang menggunakannya.

// ABSTRACT CLASS
abstract class Shape {
    abstract public function getArea();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }
}

// INTERFACE
interface Logger {
    public function log($message);
}

class FileLogger implements Logger {
    public function log($message) {
        echo "Log to file: $message<br>";
    }
}
