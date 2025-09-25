<?php
$dataPoczatkowa = strtotime("2006-12-15");
$dataObecna = time();
$roznica = $dataObecna - $dataPoczatkowa;
$dniMinelo = floor($roznica / (60 * 60 * 24));
echo "Od 15.12.2006 minęło: $dniMinelo dni.";
?>
