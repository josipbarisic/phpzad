<?php
class klasa1{

    function funkcija1()
    {
        echo "<p>Ime klase: ".__CLASS__."</p>".PHP_EOL;
        $ruta = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        echo 'Ruta: '. $ruta.PHP_EOL;
        echo 'Funkcija: '.__FUNCTION__;
    }
    }

?>