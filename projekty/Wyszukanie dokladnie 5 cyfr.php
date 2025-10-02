<?php
//szukamy 5 cyfr

$wyrazenie = '/^\d\d\d\d\d$';
$tekst = "telefon:666666666"
if(preg_match($wyrazenie,$tekst))
    echo("Znaleziono podany wzorzec.")
else
    echo("Nie znaleziono podanego wzorca.");
?>