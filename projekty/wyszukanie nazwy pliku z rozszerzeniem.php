<?php
//szukamy 5 cyfr

$wyrazenie = '/\S*\.gif/i';
$tekst = "ikona jest w logo.gif"
if(preg_match($wyrazenie,$tekst))
    echo("Znaleziono podany wzorzec.")
else
    echo("Nie znaleziono podanego wzorca.");
?>