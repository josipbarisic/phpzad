<?php

echo '<h1>Unesite url parametar za testiranje.</h1>';

#autoload postojecih klasa
function __autoload($ime_klase)
{
    include_once './files/classes/'.$ime_klase.'.php';
}
$klasa1= new klasa1();
$klasa2= new klasa2();

if (isset($_GET['klasa']) && isset($_GET['funkcija']))
{
    $ime_klase=$_GET['klasa'];
    $ime_funkcije=$_GET['funkcija'];
    if (isset($ime_klase))
    {
        switch($ime_klase)
        {
            case 'klasa1':
                if(strcmp($ime_funkcije, 'prvaFunkcija')==0)
                {
                    $klasa1->prvaFunkcija();
                }
                elseif(strcmp($ime_funkcije, 'drugaFunkcija')==0)
                {
                    $klasa1->drugaFunkcija();
                }
                else
                {
                    echo 'Krivo ime funkcije.';
                }
                break;
            case 'klasa2':
                if(strcmp($ime_funkcije, 'funkcija1')==0)
                {
                    $klasa1->funkcija1();
                }
                elseif(strcmp($ime_funkcije, 'funkcija2')==0)
                {
                    $klasa1->funkcija2();
                }
                else
                {
                    echo 'Krivo ime funkcije.';
                }
                break;    
        }
    }

}
else
{
    echo 'Unesite ime klase i ime funkcije.';
}



?>