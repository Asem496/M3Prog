<?php
$titel = "Een php html voorbeeld pagina";
$afbeeldingURL = "https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png";
$afbeeldingAlt = "PHP logo";
$auteur = "Asem496";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titel; ?></title>
</head>
<body>
    <main>
        <?php 
        echo '<img src="' . $afbeeldingURL . '" alt="' . $afbeeldingAlt . '">';
        ?>
        
        <section>
            <h2>Auteur: <?= $auteur; ?></h2>
        </section>
    </main>
</body>
</html>
