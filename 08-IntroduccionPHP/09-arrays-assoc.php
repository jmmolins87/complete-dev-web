<?php include 'includes/header.php';

$client = [
    'name' => 'Juanma Molins Cortés',
    'type' => 'Premium',
    'balance' => 3000,
    'info' => [
        'address' => 'Calle Falsa 123',
        'city' => 'Springfield'
    ]
];

echo "<pre>";
var_dump($client);
echo "</pre>";
echo "El nombre del cliente es: {$client['name']}";
echo "<br>";
echo "La dirección del cliente es: {$client['info']['address']} de {$client ['info']['city']}";

include 'includes/footer.php';