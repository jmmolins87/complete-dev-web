<?php include 'includes/header.php';

$shoping = ['Tablet', 'Phone', 'Laptop', 'Smartwatch'];
echo "<pre>";
var_dump($shoping);
echo "</pre>";
echo "El primer elemento del array es: {$shoping[0]}";
echo "<br>";
echo "El segundo elemento del array es: {$shoping[1]} y lo podemos modificar por 'Smartphone'";
echo "<br>";
$hoping[1] = 'Smartphone';
echo "El segundo elemento del array ahora es: {$hoping[1]}";
echo "<br>";
echo "Añadimos un nuevo elemento al array: ";
$shoping[] = 'Television';
echo "<pre>";
var_dump($shoping);
echo "</pre>";
echo "Eliminamos el primer elemento del array: ";
unset($shoping[0]);
echo "<pre>";
var_dump($shoping);
echo "</pre>";

include 'includes/footer.php';