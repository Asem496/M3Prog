<?php
 $announcements = [
    "Nieuwe website gelanceerd!",
    "Korting op alle producten deze week!",
    "Gratis verzending bij bestellingen boven €50!"
];

 $reviews = [
    ["Demon's Souls", 10],
    ["Mario Wonder", 9.5],
    ["Mega Man 2", 8]
];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements & Reviews</title>
</head>
<body>
    <h1>Aankondigingen</h1>
    <ul>
        <?php 
        foreach ($announcements as $announcement) {
            echo "<li>$announcement</li>";
        }
        ?>
    </ul>
    
    <h1>Game Reviews</h1>
    <ul>
        <?php 
        foreach ($reviews as $review) {
            echo "<li>{$review[0]} - Score: {$review[1]}/10</li>";
        }
        ?>
    </ul>

    <h2>Conclusie</h2>
    <p>De games hebben geweldige scores, vooral Demon's Souls met een perfecte 10! Mario Wonder komt ook dicht in de buurt.</p>
</body>
</html>
