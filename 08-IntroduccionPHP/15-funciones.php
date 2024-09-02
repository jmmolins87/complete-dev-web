<?php include 'includes/header.php';

function add(int $num1 = 0, $num2 = 0) {
    echo $num1 + $num2;
}

echo add(10, 30);

include 'includes/footer.php';