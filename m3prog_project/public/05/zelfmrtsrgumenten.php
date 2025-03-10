<?php
function convertCurrency ($amount , $fromCurrency , $toCurrency ) {
echo "Amount:" .$amount . "\n";
echo "From Currency: " . $fromCurrency . "\n";
echo "Currency: " . $toCurrency . "\n";

}
convertCurrency(100, "USD", "EUR");
echo "<br>";  

?>


<?php
// Functie voor het verzenden van een e-mail
function sendEmail($to, $from, $subject, $message) {
    echo "To: " . $to . "\n";
    echo "From: " . $from . "\n";
    echo "Subject: " . $subject . "\n";
    echo "Message: " . $message . "\n";
echo "<br>";  

}

// Functie voor het genereren van een willekeurige string
function generateRandomString($length) {
    echo "Length: " . $length . "\n";
}
echo "<br>";  

// Functie voor het berekenen van de oppervlakte
function calculateArea($length, $width) {
    echo "Length: " . $length . "\n";
    echo "Width: " . $width . "\n";

}
echo "<br>";  


sendEmail("recipient@example.com", "sender@example.com", "Test Subject",
 "This is a test message.");
generateRandomString(10);
echo "<br>";  
calculateArea(5,
 8);
 echo "<br>";
?>
