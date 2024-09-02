<?php include 'includes/header.php';

$products = [
    [
        'name' => 'Tablet',
        'price' => 200,
        'available' => true
    ],
    [
        'name' => 'Televisión',
        'price' => 300,
        'available' => true
    ],
    [
        'name' => 'Monitor',
        'price' => 400,
        'available' => false
    ]
];  

echo "<pre>";
var_dump($products);
echo "</pre>";

echo "<br>";

$json = json_encode($products, JSON_UNESCAPED_UNICODE);
$json_array = json_decode($json);
echo "<pre>";
var_dump($json);
var_dump($json_array);
echo "</pre>";

include 'includes/footer.php';