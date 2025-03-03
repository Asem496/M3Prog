<?php

$stoplichtKleur = "R";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php   
if($stoplichtKleur == "G") {
    echo "Doorrijden";
    echo "<button style='background-color:#00FF00;height:25px;width:25px;'></button>";
} elseif($stoplichtKleur == "O") {
    echo "Stoppen";
    echo "<button style='background-color:#FFA500;height:25px;width:25px;'></button>";
} elseif($stoplichtKleur == "R") {
    echo "<button style='background-color:#FF0000;height:25px;width:25px;'></button>";
} else {
    echo "Fout";
}
?>
</body>
</html>
