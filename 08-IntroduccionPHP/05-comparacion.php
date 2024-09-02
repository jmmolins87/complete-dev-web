<?php include 'includes/header.php';

$num1 = 20;
$num2 = 30;
$num3 = 30;
$num4 = "30";

var_dump("El número 20 es más grande que el 30", $num1 > $num2);
echo "<br>";
var_dump("El número 20 no es más grande que el 30", $num1 < $num2);
echo "<br>";
var_dump("El número 20 es más pequeño o igual que 30", $num1 <= $num2);
echo "<br>";
var_dump("El número 30 es igual que 30", $num2 == $num3);
echo "<br>";
var_dump("El número 30 no es igual que '30'", $num3 === $num4);
echo "<br>";
// -1 Si el número de la izquierda es menor, 0 si son iguales, 1 si el número de la izquierda es mayor
var_dump($num1 <=> $num2);
var_dump($num2 <=> $num3);
var_dump($num2 <=> $num1);

include 'includes/footer.php';