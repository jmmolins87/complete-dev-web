<?php require_once('includes/header.php');

echo "include -> si no encuentra el archivo, sigue ejecutando el código";
echo "<br>";
echo "require -> si no encuentra el archivo, detiene la ejecución del código";
echo "<br>";
echo "require_once -> si no encuentra el archivo, detiene la ejecución del código y solo lo incluye una vez";

include 'includes/footer.php';