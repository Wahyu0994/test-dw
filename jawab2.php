<?php 

// Diketahui
$ikan = 1476;
$ikanmati = 0.6;
$hariberanak = 46;
$totalhari = 471;

// Dijawab
$ikanmati2 = $ikan * $ikanmati;

$ikanmati3 = $ikan - $ikanmati2;

$totalhari2 = $totalhari / $hariberanak;

$totalikan = $totalhari2 * $ikanmati3;

echo "jumlah ikan : ".$ikan;
echo "\n";
echo "ikan mati : 6 % atau ".$ikanmati;
echo "\n";
echo "jumlah hari ikan beranak :". $hariberanak;
echo "\n";
echo "Total ikan Dalam 471 Hari : " . round($totalikan);


 ?>
