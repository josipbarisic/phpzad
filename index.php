<?php

#autoload postojecih klasa
function __autoload($ime_klase)
{
    include_once './files/classes/'.$ime_klase.'.php';
}
$klasa= new klasa1();
echo $klasa->funkcija1();
$klasa2= new klasa2();
echo $klasa2->funkcija2();

?>