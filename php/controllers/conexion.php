<?php
include('config.php');

$conexion = new mysqli($sv,$user,$pass,$bd);

if(mysqli_connect_errno()){
    echo "No conectado", mysqli_connect_error;
    exit();
}

?>