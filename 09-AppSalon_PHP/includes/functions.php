


<?php

function get_services() {
    include 'database.php';

    try {
        // Importar credenciales de la base de datos
        require 'database.php';
        // Consulta SQL
        $sql = "SELECT * FROM servicios;";
        // Realizar la consulta
        $query = mysqli_query($db, $sql);
        return $query;
        // Acceder a los resultados
        
        // Cerrar la conexión
        
        // Retornar los resultados
        
    } catch (Exception $e) {

    }
}

get_services();