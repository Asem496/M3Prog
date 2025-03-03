<?php
$totaalBesteld = 5000.0;
$verzendKosten = 3.50;
$korting = 0;
$cadeautje = false;
$cadeauWaarde = 7.5;

if($totaalBesteld < 50) {
    $verzendKosten = 3.50;
} elseif($totaalBesteld >= 50) {
    $verzendKosten = 2.50;
} else {
    $verzendKosten = 0;
}
if($totaalBesteld >= 250) {
    $korting = 0.05;
}
if($totaalBesteld >= 400) {
    $cadeautje = true;
}

if($totaalBesteld > 1000) {
    $korting = 7.5;
}

$totaal = $totaalBesteld - ($korting*$totaalBesteld) + ($verzendKosten);

echo "Totaal van de bestelde artiekelen $totaalBesteld <br>";  
echo "Totaal met verzenkosten wordt het $totaal <br>";
if($cadeautje) {
    echo "U krijgt een cadeautje";
}
?>

