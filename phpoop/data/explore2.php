<?php

//Inheritance (pewarisan)
// Inheritance memungkinkan sebuah kelas (child class)
// untuk mewarisi properti dan metode dari kelas lain (parent class).
// Hal ini membantu dalam pengelolaan kode yang lebih terstruktur dan memudahkan pengembangan aplikasi.
// ini bersifat automatic jd tidak perlu di copas lagi untuk membuat turunan 

class ParentClass { //properti parent
    public $name = "Parent";

    public function greet() {
        echo "Hello from {$this->name}!\n";
    }
}

class ChildClass extends ParentClass {
    public function customGreet() {
        echo "Hello from the child!\n";
    }
}

$child = new ChildClass();
$child->greet(); // Memanggil metode parent
$child->customGreet(); // Memanggil metode child
