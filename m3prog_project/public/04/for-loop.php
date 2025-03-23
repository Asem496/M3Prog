<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loopt</title>
</head>
<body>
    <h1>prijzenLijst</h1>
    <ul>
        <?php
        $prijzen = [2.50, 1.50, 6.78, 9.89, 10.25];
        for ($i = 0; $i < count($prijzen); $i++) {
        echo "<li>Prijs: €" . number_format($prijzen[$i], 2, ',', '.') . "</li>";
    }
    ?>
    
</body>
</html>