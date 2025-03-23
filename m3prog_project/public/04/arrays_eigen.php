<?php
 
 $games = ["Minecraft", "Fortnite", "Call of Duty", "GTA V", "Among Us"];

 echo "Aantal games: " . count($games) . "<br><br>";

 array_push($games, "League of Legends");

 print_r($games);
echo "<br><br>";

 echo "Nieuwe aantal games: " . count($games) . "<br><br>";

 echo implode(' >> ', $games);
echo "<br><br>";

 echo implode(',<br>', $games);
echo "<br><br>";

 sort($games);

 print_r($games);
echo "<br><br>";

 echo implode('<br>', $games);
?>
