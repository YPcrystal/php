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
