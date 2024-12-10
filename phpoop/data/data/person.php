<?php

class Person //nulis class huruf awalnya besar
{
    var string $name; //ciri-ciri dari objek tersebut bagaikan pabrik untuk membuat objek
    var string $address;
    var string $country; //default value
    var int $age;

   
    const JUMLAH_KAKI = 2; //memakai huruf kapital agar di tau klo dia constant

    function __construct(
        string $name,
        int $age,
        string $address,
        string $country = "indonesia"
    ) {
        $this->name = $name;
        $this->address = $address;
        $this->country = $country;
        $this->age = $age;
    }

    function tahunLahir() {
        return 2024  - $this->age; //this kembali ke objek yaitu $person
    }

    function jumlahSandal() {
        // return person::JUMLAH_KAKI
        return self::JUMLAH_KAKI / 2;

}

}