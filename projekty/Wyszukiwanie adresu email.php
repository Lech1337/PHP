<?php
$email='/[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]*/';
$tekst="mail: smiesznymail@123.com"
if(preg_match($email,$tekst))
    echo("Znaleziono podany wzorzec.")
else
    echo("Nie znaleziono podanego wzorca.");
?>