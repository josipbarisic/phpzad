<?php
class Route1{
    public static $validRoutes=array();

    public static function set($route, $function){
        self::$validRoutes[]=$route;
    }

    function funkcija1($ime_klase)
    {
        require './files/classes/'.$ime_klase.'.php';
        echo "<p>Ime klase: ".$ime_klase."</p>".PHP_EOL;
    }
?>