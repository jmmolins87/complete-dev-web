<?php include 'includes/header.php';

// While
$i = 0; // Inicializador
while($i < 10) {
    echo $i;
    echo "<br>";
    $i++; // Incremento
}
echo "<br>";
// Do while
$i = 0;
do {
    echo $i;
    echo "<br>";
    $i++;
} while($i < 10);
echo "<br>";
// For
for($i = 0; $i < 10; $i++) {
    if($i % 3 === 0 && $i % 5 === 0) {
        echo $i . " - Fizz Buzz <br/>";
    } else if($i % 3 === 0) {
        echo $i . " - Fizz <br/>";
    } else if($i % 5 === 0) {
        echo $i . " - Buzz <br/>";
    }
}

include 'includes/footer.php';