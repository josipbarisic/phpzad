<?php
class klasa2{

    public function __construct()
    {

    }
    public function funkcija1()
    {
        echo "<p>Ime klase: ".__CLASS__."</p>".PHP_EOL;
        $ruta = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        echo '<p>Ruta: '. $ruta.'</p>'.PHP_EOL;
        echo 'Funkcija: '.__FUNCTION__;
    }
    public function funkcija2()
    {
        echo "<p>Ime klase: ".__CLASS__."</p>".PHP_EOL;
        $ruta = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        echo '<p>Ruta: '. $ruta.'</p>'.PHP_EOL;
        echo 'Funkcija: '.__FUNCTION__;
    }
    }

?>