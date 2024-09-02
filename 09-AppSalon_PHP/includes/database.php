<?php 


// Database connection
$db = mysqli_connect('localhost', 'root', '', 'appsalon');

if($db){
    echo "Database connected";
}