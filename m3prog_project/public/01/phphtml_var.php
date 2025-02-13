
<?php
    $titel = "Titel van de pagina";
    $datum = date('d-m-Y');
    $tijd = date("H:i");
    $favorietegame = "Super metroid";
    $mooisteGetal= 42;
$favorieteShow = "The Mandalorian";
    $favorieteStad = "Amsterdam";
 ?>
    <!doctype html>
<html lang="en">
    <head>
        <title><?php echo $title ?></title>
    </head>
    <body>
        <h2>De datum vandaag is: <?php echo $datum ?>, en de tijd is <?php echo date("H:i")?> uur.
        <p><h2>Mijn favoriete Show</h2><?php echo $favorieteShow ?></p>
        <p><h2>Mijn favoriete getal</h2><?php echo $mooisteGetal ?></p>
        <p><h2>Mijn favoriete game</h2><?php echo $favorietegame ?></p>
        <p><h2>Mijn favoriete stad</h2><?php echo $favorieteStad ?></p>
    </body>
</html>