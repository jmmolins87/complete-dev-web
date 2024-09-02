<?php include 'includes/header.php';

$clients = array('Pedro', 'Juan', 'Karen');
foreach ($clients as $client) {
    echo $client . '<br>';
}

echo "Tenemos " . count($clients) . " clientes";
echo "<br>";
for($i = 0; $i < count($clients); $i++) {
    echo $clients[$i] . '<br>';
}

$products = [
    [
        'name' => 'Tablet',
        'price' => 200,
        'available' => true
    ],
    [
        'name' => 'Television',
        'price' => 300,
        'available' => true
    ],
    [
        'name' => 'Monitor',
        'price' => 400,
        'available' => false
    ]
];
foreach($products as $product) {
    ?>
        <li>
            <p>Producto: <?php echo $product['name']; ?></p>
            <p>Precio: <?php echo $product['price'] . "€"; ?></p>
            <?php
                echo ($product['available']) ? "<p>Producto disponible</p>" : "<p>Prodcuto no disponible</p>";
            ?>
        </li>
    <?php
}

include 'includes/footer.php';