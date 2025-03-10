<?php
function mijnPrint($printText)
{
    // Als we geen argument doorgeven, krijgen we een foutmelding
    // Hier geven we de waarde van $printText door en printen die
    print($printText);
    print("<br>");
}

// Correcte aanroep van de functie met een string als argument
mijnPrint("dit wordt mijn print"); // Dit werkt correct, omdat we een string meegeven
mijnPrint("een andere tekst");
mijnPrint("nog een tekst");

 
 $dezeGaatMee = "deze waarde wordt meegenomen";

 mijnPrint($dezeGaatMee);  
 

// Fout in originele code: er werd geen argument meegegeven aan mijnPrint()
// Dit zou leiden tot een foutmelding, omdat $printText niet gedefinieerd is.
?>

<!-- Uitleg op het scherm: -->
<p>
    <!-- Dit is het antwoord op vraag 1, waarom het fout ging -->
    Het fout gaat omdat de functie mijnPrint() een argument verwacht (namelijk $printText), 
    maar er werd geen waarde meegegeven bij de aanroepen. Hierdoor gaf de code een foutmelding. 
    Om het op te lossen, moet je altijd een waarde (zoals een string of een variabele) doorgeven bij de functieaanroep.
</p>



