<?php
$Weapons = "Bows"; 
    
$Armor = "The spirt Shroud";
$Accessories = "Manald Heal";
$crafting ="Torches";

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
        <h1>Items</h1>
        <section>
            <h2>Weapons</h2>
            <p><?php echo $Weapons; ?></p>
        </section>
        <section>
            <h2>Armor</h2>
            <p><?php echo $Armor; ?></p>
        </section>
        <section>
            <h2>Accessories</h2>
            <p><?php echo $Accessories; ?></p>
        </section>
        <section>
            <h2>crafting</h2>
            <p><?php echo $crafting; ?></p>
        </section>
    </main>
</body>
</html>