<?php include 'includes/header.php';

function authUser(bool $isAuth): string | int {
    // return "El usuario está autenticado";
    if($isAuth) {
        return "El usuario está autenticado";
    } else {
        return 200;
    }
}

$user = authUser(false);
echo $user;

include 'includes/footer.php';