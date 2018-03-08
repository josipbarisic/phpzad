<?php
class klasa2{

    function funkcija2()
    {
        echo "<p>Ime klase: ".__CLASS__."</p>".PHP_EOL;
        $ruta = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        echo 'Ruta: '. $ruta;
        echo 'Funkcija: '.__FUNCTION__;
    }
    }

?>