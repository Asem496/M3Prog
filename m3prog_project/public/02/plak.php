

<?php
$totaleString = "hello" ." ". "world" . "<br>";
echo $totaleString;
 

$voornaam = "Luigi";
$achternaam = "mario";
$fullName = $voornaam ." ". $achternaam . "<br>";
echo $fullName;

$naam = "Yoshi";
$ondertekentDoor = "directeur bowser";
$emailtekst = "Beste $naam<br>
Helaas moeten wij uw verzoek afwijzen.<br>
Onze Goomba's vinden het niet leuk om opgegeten te worden<br>
<br>
Hoogachtend<br>
...<br>
<br>
PS:<br>
De princess is in haar kasteel... voor nu :>";
 
$enemy = "Bowser";
$emailtekst = "Beste $naam<br>
Helaas moeten wij uw verzoek afwijzen.<br>
Onze $enemy vinden het niet leuk om opgegeten te worden<br>";
echo $emailtekst;
?>