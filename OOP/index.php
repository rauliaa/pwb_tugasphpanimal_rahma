<?php

require_once 'Animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

// Animal
$sheep = new Animal("Shaun");
echo "Name : " . $sheep->getName() . PHP_EOL; 
echo "</br>Legs : " . $sheep->getLegs() . PHP_EOL;
echo "</br>Cold Blooded : " . $sheep->getColdBlooded() . "<br>";

// Frog
$kodok = new Frog("Buduk");
echo "</br>Name : " . $kodok->getName() . PHP_EOL;
echo "</br>Legs : " . $kodok->getLegs() . PHP_EOL;
echo "</br>Cold Blooded : " . $kodok->getColdBlooded() . "<br>";
echo "Jump : " . $kodok->jump() . "</br>";

// Ape
$sungokong = new Ape("Kera Sakti");
echo "</br>Name : " . $sungokong->getName() . "<br>";
echo "Legs : " . $sungokong->getLegs() . PHP_EOL;
echo "</br>Cold Blooded : " . $sungokong->getColdBlooded() . PHP_EOL;
$sungokong->yell();

?>
