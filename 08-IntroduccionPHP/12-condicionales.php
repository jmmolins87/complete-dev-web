<?php include 'includes/header.php';

$autheticated = true;
$admin = true;

if($autheticated && $admin) {
    echo "El usuario está autenticado";
} else {
    echo "El usuario no está autenticado";
}

// if anidados...
$client = [
    'name' => 'Juan',
    'saldo' => 200,
    'information' => [
        'type' => 'premium'
    ]
];
echo "<br>";
if(!empty($client)) {
    echo "El arreglo no está vacío";
    echo "<br>";
    if($client['saldo'] > 0) {
        echo "El cliente tiene saldo";
    } else {
        echo "No tiene saldo";
    }
}
// else if
echo "<br>";
if($client['saldo'] > 200) {
    echo "El cliente tiene saldo";
} else if($client['information']['type'] === 'premium') {
    echo "El cliente es premium";
} else {
    echo "No tiene saldo";
}
// switch
echo "<br>";
$tecnology = 'PHP';
switch($tecnology) {
    case 'PHP':
        echo "Desarrollo web con PHP";
        break;
    case 'JavaScript':
        echo "Desarrollo web con JavaScript";
        break;
    default:
        echo "Desarrollo web";
        break;
}

include 'includes/footer.php';