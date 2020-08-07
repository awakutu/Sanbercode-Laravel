<?php
require_once 'Animal.php';
require_once 'frog.php';
require_once 'Ape.php';

$sheep = new Animal("shaun", 4);
echo "Nama hewannya" . " ".$sheep->name. "<br>"; 
echo "Dia punya kaki" ." ". $sheep->legs. "<br>"; // 2
echo "Cold Blooded:" . $sheep->get_cold_blooded();
echo "<br><br>";
$kodok = new Frog("buduk",4);
echo "Nama hewannya $kodok->name.<br>";
echo "Dia punya kaki $kodok->legs.<br>";
echo "Cold Blooded:" . $kodok->get_cold_blooded()."<br>";
echo "Dia punya kemampuan ";
$kodok->jump(); // "hop hop"
echo "<br><br>";
$sungokong = new Ape("kera sakti",2);
echo "Nama hewannya $sungokong->name.<br>";
echo "Dia punya kaki $sungokong->legs.<br>";
echo "Cold Blooded:" . $sungokong->get_cold_blooded()."<br>";
echo "Dia kalau berteriak terdengar ";
$sungokong->yell() // "Auooo"


?>