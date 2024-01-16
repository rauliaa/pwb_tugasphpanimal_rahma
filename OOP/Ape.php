<?php
require_once 'Animal.php';

class Ape extends Animal {
    public function __construct($name) {
        parent::__construct($name);
        $this->legs = 2; // Ganti jumlah kaki menjadi 2 untuk class Ape
    }
    public function yell() {
        echo "</br>Yell : Auooooooo\n";
    }
}
?>