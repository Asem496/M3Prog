 


 
<?php

 
$afstand = 1080.00; 
$brandstofprijs_per_liter = 2.159; 
$treinprijs_enkel = 60.00;  
$tank_capaciteit = 50.00;  
$verbruik_per_km = 1 / 15; 

 $totaal_liters = $afstand * $verbruik_per_km;

 $aantal_tankbeurten = ceil($totaal_liters / $tank_capaciteit);

 $totale_brandstofkosten = $totaal_liters * $brandstofprijs_per_liter;

 echo "De totale afstand is {$afstand} km." . PHP_EOL;
echo "De totale benodigde brandstof is {$totaal_liters} liter." . PHP_EOL;
echo "Je moet {$aantal_tankbeurten} keer tanken om Bordeaux te bereiken." . PHP_EOL;
echo "De totale brandstofkosten voor de reis bedragen €{$totale_brandstofkosten}." . PHP_EOL;

 if ($totale_brandstofkosten > $treinprijs_enkel) {
    echo "Ik ga met de trein." . PHP_EOL;
} else {
    echo "Ik ga met de auto." . PHP_EOL;
}

?>

