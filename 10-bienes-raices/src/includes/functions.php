


<?php 
    require "app.php";
    function getTemplate( string $name, bool $home = false ) {
        include TEMPLATES_URL . "/${name}.php"; 
    }