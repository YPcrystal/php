<?php

require_once "data/person.php";
require_once "data/santri.php"; //didalam class bisa membuat bbrp objek

$person = new Person(name: 'shofy', address: 'poso', age: 19); //$person=obejek Person()=fungsi
var_dump($person);
$fulan = new Person(name: 'eko', address: 'bogor', age: 20);
var_dump($fulan);
$fulanah = new Person(name: 'sinta', address: 'solo', age: 21);
var_dump($fulanah);
// $person->name = "shofy";
$person->address = "poso";
// // $person->country = "indonesia"; bisa dikasih nilai default value di person php
// $person->age = 19; //tipe data integer tidak boleh ditambahkan tanda petik
// var_dump($person);
// echo "Tahun kelahiran $person->name adalah tahun " . (2024 - $person->age) .  PHP_EOL;
// echo "Tahun kelahiran $person->name adalah tahun " . $person->tahunLahir() .  PHP_EOL;
// echo "Jumlah kaki  $person->name ada " . Person::JUMLAH_KAKI .  PHP_EOL; //titik dua tidak ada spasi
// echo "$person->name membutuhkan" . $person->jumlahSandal() . " pasang sandal" .  PHP_EOL;
// echo "$person->name tinggal di Negara " . $person->country . "" . PHP_EOL;
// untuk memanggil fungsi menggunakan tanda panah

// $fulan = new Person();
// $fulan->name = "eko";
// $fulan->address = "bogor";
// // $fulan->country = "indonesia";
// $fulan->age = 20;
// var_dump($fulan);
// echo "Tahun kelahiran $fulan->name adalah tahun " . (2024 - $fulan->age) .  PHP_EOL;
// echo "Tahun kelahiran $fulan->name adalah tahun " . $fulan->tahunLahir() .  PHP_EOL;

// $fulanah = new Person();
// $fulanah->name = "sinta";
// $fulanah->address = "solo";
// // $fulanah->country = "indonesia";
// $fulanah->age = 21;
// var_dump($fulanah);
// echo "Tahun kelahiran $fulanah->name adalah tahun " . (2024 - $fulanah->age) .  PHP_EOL;
// echo "Tahun kelahiran $fulanah->name adalah tahun " . $fulanah->tahunLahir() .  PHP_EOL;

$sholih = new Santri ('sholih', 20, 'solo', 'Indonesia');
$sholih->hafalan = 5;
$sholih->sekolah = 5;
var_dump($sholih);