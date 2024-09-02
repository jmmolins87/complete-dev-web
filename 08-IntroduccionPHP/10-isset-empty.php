<?php include 'includes/header.php';

$client = [];
$client2 = array();
$client3 = array('Juanma', 'Pedro', 'Pablo');

// Empty - Revisa si un array está vacío
var_dump(empty($client));
echo "<br>";
var_dump(empty($client2));
echo "<br>";
var_dump(empty($client3));

// Isset - Revisa si un array está creado o si una propiedad está definida
echo "<br>";
var_dump(isset($client));
echo "<br>";
var_dump(isset($client['name']));
echo "<br>";
var_dump(isset($client['address']));
echo "<br>";
var_dump(isset($client3));

include 'includes/footer.php';