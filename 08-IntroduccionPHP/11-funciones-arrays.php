<?php include 'includes/header.php';

// in_array - buscar elementos dentro de un array
$clients = ['Juan', 'Pedro', 'Pablo'];
echo "<pre>";
var_dump(in_array('Juan', $clients));
echo "</pre>";

// Ordenar elementos de un array
$numbers = array(1, 3, 4, 2, 5);
echo "<pre>";
var_dump($numbers);
echo "</pre>";
sort($numbers); // Ordena de menor a mayor
echo "Ordenado de menor a mayor";
echo "<br>";
echo "<pre>";
var_dump($numbers);
echo "</pre>";
rsort($numbers); // Ordena de mayora menor
echo "Ordenado de mayor a menor";
echo "<br>";
echo "<pre>";
var_dump($numbers);
echo "</pre>";


include 'includes/footer.php';