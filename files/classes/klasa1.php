<?php
class klasa1{
    
    #konstruktor klase1
    public function __construct()
    {

    }

    #funkcija ispisuje ime klase u kojoj se nalazi, svoje ime, te url 
    public function PrvaFunkcija()
    {
        echo "<p>Ime klase: ".__CLASS__."</p>".PHP_EOL;
        $ruta = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        echo '<p>Ruta: '. $ruta.'</p>'.PHP_EOL;
        echo 'Funkcija: '.__FUNCTION__;
    }

    #funkcija ispisuje ime klase u kojoj se nalazi, svoje ime, te url 
    public function DrugaFunkcija()
    {
        echo "<p>Ime klase: ".__CLASS__."</p>".PHP_EOL;
        $ruta = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        echo '<p>Ruta: '. $ruta.'</p>'.PHP_EOL;
        echo 'Funkcija: '.__FUNCTION__;
    }
    }

?>