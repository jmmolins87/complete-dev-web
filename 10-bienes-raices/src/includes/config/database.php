

<?php
    function connectDB() : mysqli {
        $db = mysqli_connect('localhost', 'root', '', 'bienesraices_crud');
    
        
        if(!$db) {
            echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
            exit;
        }

        return $db;
    }
?>