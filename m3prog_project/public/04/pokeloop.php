<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Pokémon Loop</title>
</head>
<body>
<h1>Mijn Pokémon Collectie</h1>
    <div class="pokemon-container">
        <?php
         $pokemons = ["Pikachu", "Charmander", "Bulbasaur", "Squirtle", "Eevee"];

         $images = [
            "https://assets.pokemon.com/assets/cms2/img/pokedex/full/025.png",
            "https://assets.pokemon.com/assets/cms2/img/pokedex/full/004.png",
            "https://assets.pokemon.com/assets/cms2/img/pokedex/full/001.png",
            "https://assets.pokemon.com/assets/cms2/img/pokedex/full/007.png",
            "https://assets.pokemon.com/assets/cms2/img/pokedex/full/133.png"
        ];

        for ($i = 0; $i < count($pokemons); $i++) {
            echo "<div class='pokemon'>";
            echo "<h2>{$pokemons[$i]}</h2>";
            echo "<img src='{$images[$i]}' alt='{$pokemons[$i]}'>";
            echo "</div>";
        }
        ?>
</body>
</html>