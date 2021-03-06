<?php

echo '<center><h1>Unesite url parametre.</h1>';
 /*
 autoload funkcija pokretanjem skripte 
 ukljucuje sve klase iz odabranog direktorija
 */
function autoload_funkcija($ime_klase)
{
    include './files/classes/'.$ime_klase.'.php';
}

#implementacija autoload funkcije
spl_autoload_register('autoload_funkcija');

#if petlja provjerava jesu li uneseni url parametri "klasa" i "funkcija"
if (isset($_GET["klasa"]) && isset($_GET["funkcija"]))
{
    
    $classname=$_GET["klasa"];
    $funcname=$_GET["funkcija"];
    
        switch($classname)
        {
            case 'klasa1':
                #instanca klase
                $klasa1= new klasa1();
                /* ako je vrijednost varijable $funcname jednaka upisanom stringu
                poziva se upisana funkcija, ==0 oznacava da stringovi moraju biti identicni
                */
                if(strcmp($funcname, 'PrvaFunkcija')==0) 
                {                                        
                    $klasa1->PrvaFunkcija();
                }
                elseif(strcmp($funcname, 'DrugaFunkcija')==0)
                {
                    $klasa1->DrugaFunkcija();
                }
                else
                {
                    echo 'Krivo ime funkcije.';
                }
                break;

            case 'klasa2':
                $klasa2= new klasa2();
                if(strcmp($funcname, 'funkcija1')==0)
                {
                    $klasa2->funkcija1();
                }
                elseif(strcmp($funcname, 'funkcija2')==0)
                {
                    $klasa2->funkcija2();
                }
                else
                {
                    echo 'Krivo ime funkcije.';
                }
                break; 
            default:
                echo 'Krivo ime klase';
                break;
        }
    

}
else
{
    echo '<p>Unesite ime klase i ime funkcije ( ?klasa=ImeKlase&funkcija=ImeFunkcije )</p>';

    /* Ispis klasa i funkcija u listi
    */
    echo '<p>Postojece klase su: <ul style="list-style-type:none"><li>klasa1</li><li>klasa2</li>';
    echo '<p>Funkcije u klasi1 su: <li>PrvaFunkcija</li><li>DrugaFunkcija</li>';
    echo '<p>Funkcije u klasi2 su: <li>funkcija1</li><li>funkcija2</li></ul>';
}



?>