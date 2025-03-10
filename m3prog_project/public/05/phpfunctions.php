<?php
$hoeLangIsDitWoord = "scrabbleWoord";
$woordLengte = strlen( $hoeLangIsDitWoord );
print($woordLengte);
?>




<?php
// vraag 1: Het argument van strlen() moet een string zijn.

// vraag 2: strlen() retourneert een integer.

// vraag 3: Het getal dat strlen() retourneert, is de lengte (het aantal tekens) van de string.
?>



<?php

$woord = "programmeren"; 

 
$lente = strlen($woord);

 
echo "De lengte van het woord '$woord' is: $lente";

 
echo "<br>";  

 
$tweeMacht2 = pow(2, 2);
 
echo "2 tot de macht 2 is: $tweeMacht2";
echo "<br>";

$tweeMacht10 = pow(2,10 );	
echo "2 tot de macht 10: $tweeMacht10";
?>



<?php
// vraag 1: Hoe geven we het resultaat door?
// Antwoord: We geven het resultaat door door de return-waarde van een functie op te slaan in een variabele 
// en deze vervolgens te gebruiken of te printen

// Functie documentatie strtoupper: https://www.php.net/manual/en/function.strtoupper.php

$naam = "Wario";
$naamGroot = strtoupper( $naam );
echo "In hoofdletters: $naamGroot";
echo "<br>";
// Functie documentatie strtolower: https://www.php.net/manual/en/function.strtolower.php

$naamKlein = strtolower($naamGroot);
echo "Terug naar kleine letters: $naamKlein";
echo "<br>";

echo "Originele naam: $naam";

?>