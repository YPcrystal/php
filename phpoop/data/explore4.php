<?php

// Encapsulation (Enkapsulasi)
// Encapsulation adalah pembungkusan data dan metode dalam satu kesatuan (kelas)
// dengan membatasi akses terhadap properti atau metode tertentu.
// PHP menggunakan access modifiers untuk mengontrol aksesibilitas:

// Public: Dapat diakses dari mana saja.
// Protected: Hanya dapat diakses oleh kelas itu sendiri atau kelas turunan.
// Private: Hanya dapat diakses oleh kelas itu sendiri.

class BankAccount {
    private $balance = 0;

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function getBalance() {
        return $this->balance;
    }
}

$account = new BankAccount();
$account->deposit(100);
echo $account->getBalance(); // Output: 100
