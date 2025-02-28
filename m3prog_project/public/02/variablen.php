<?php
$stad = "Amsterdam";
$hetWeer = "zonnig";
$aantalMensen = 1000000;
$huidigeTemperatuur = 25.1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Welkom in <?= $stad; ?></h1>
        <p>Het is vandaag <?= $hetWeer; ?> weer.</p>
        <p>Er zijn vandaag <?= $aantalMensen; ?> mensen in <?= $stad; ?></p>
        <p>De huidige temperatuur is <?= $huidigeTemperatuur; ?> graden</p>
    </main>
</body>
</html>