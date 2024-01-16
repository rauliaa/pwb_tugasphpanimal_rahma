<?php

class Animal 
{
    public $name;
    public $legs = 4;
    public $coldBlooded = "No";

    public function __construct($name) {
        $this->name = $name;
    }

    public function getLegs() {
        return $this->legs;
    }

    public function getColdBlooded() {
        return $this->coldBlooded;
    }

    public function getName() {
        return $this->name;
    }
}

?>
