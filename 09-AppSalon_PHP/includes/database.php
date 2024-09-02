<?php 


// Database connection
$db = mysqli_connect('localhost', 'root', '', 'appsalon');

if(!$db){
    "Hubo un error";
    exit;
}