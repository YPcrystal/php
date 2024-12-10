<?php

// Polymorphism (Polimorfisme)
// Polimorfisme adalah kemampuan untuk memanggil metode yang sama pada objek dari kelas yang berbeda,
// tetapi dengan implementasi yang berbeda.
// Dalam PHP, ini sering dicapai dengan menggunakan inheritance atau interface.

class Animal {
    public function makeSound() {
        echo "Animal sound\n";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Bark!\n";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow!<br>";
    }
}

$animals = [new Dog(), new Cat()];
foreach ($animals as $animal) {
    $animal->makeSound(); // Memanggil metode yang sesuai dengan kelas masing-masing
}
