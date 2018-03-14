<?php
class klasa1{

    public function __construct()
    {

    }
    
    public function prvaFunkcija()
    {
        echo "<p>Ime klase: ".__CLASS__."</p>".PHP_EOL;
        $ruta = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        echo '<p>Ruta: '. $ruta.'</p>'.PHP_EOL;
        echo 'Funkcija: '.__FUNCTION__;
    }
    public function drugaFunkcija()
    {
        echo "<p>Ime klase: ".__CLASS__."</p>".PHP_EOL;
        $ruta = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        echo '<p>Ruta: '. $ruta.'</p>'.PHP_EOL;
        echo 'Funkcija: '.__FUNCTION__;
    }
    }

?>