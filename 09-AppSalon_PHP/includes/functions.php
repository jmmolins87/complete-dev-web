


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
        while ($row = mysqli_fetch_assoc($query)) {
            echo $row['nombre'] . "<br>";
        }
        // Cerrar la conexión
        mysqli_close($db);       
        // Retornar los resultados
        return $query;
        
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}

get_services();