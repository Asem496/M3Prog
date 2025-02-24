<?php

$getal = 12345.678;

$afgerond1 = round($getal);
echo "Afronden naar boven: $afgerond1\n";
 
$getal2 = 12345;
$afgerond2 = floor($getal2);
echo "Afronden naar beneden: $afgerond2\n";


$random1 = rand(1, 100);
$random2 = rand(1, 100);
$random3 = rand(1, 100);

echo "Random1: $random1\n";
echo "Random2: $random2\n";
echo "Random3: $random3\n";

$som = $random1 + $random2;

echo " van Random1 en Random2: $som\n";

if ($random3 != 0) {
    $uitkomst = $som / $random3;
    echo "Uitkomst van som gedeeld door Random3: $uitkomst\n";
} else {
    echo "Delen door nul is niet mogelijk.\n";
}
?>