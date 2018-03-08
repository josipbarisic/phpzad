<?php

require_once('./files/globals.php');

require_once('./files/routes/routes.php');

#autoload postojecih klasa
function __autoload($ime_klase)
{
    require_once './files/classes/'.$ime_klase.'.php';
    echo "<p>Ime klase: ".$ime_klase."</p>".PHP_EOL;
}

$ruta = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

echo 'Ruta: '. $ruta;

?>