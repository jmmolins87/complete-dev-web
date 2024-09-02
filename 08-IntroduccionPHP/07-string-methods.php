<?php include 'includes/header.php';

$clientName = "Juanma Molins Cortés";
echo "El número de carácteres del nombre del cliente es: ";
echo strlen($clientName);
echo "<br>";
var_dump($clientName);
echo "<br>";
echo "Eliminamos espacios en blanco del nombre del cliente: ";
$text = trim($clientName);
echo strlen($text);
echo "<br>";
echo "Convertimos el nombre del cliente a mayúsculas: ";
echo strtoupper($clientName);
echo "<br>";
echo "Convertimos el nombre del cliente a minúsculas: ";
echo strtolower($clientName);
$mailCapitalize = "Jmmolins87@Gmail.Com";
$mailLowerCase = "jmmolins87@gmail.com";
echo "<br>";
echo "Es igual ". $mailCapitalize. " que ". $mailLowerCase. "? ";
var_dump($mailCapitalize) === ($mailLowerCase);
echo "<br>";
$typeClient = "Premium";
echo "El cliente " . $clientName . " es del tipo ". $typeClient;
echo "<br>";
echo "El cliente {$clientName} es del tipo {$typeClient}";

include 'includes/footer.php';