<?php

if(isset($_POST['nombre'])) {

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $edad=$_POST['edad'];
    $mail=$_POST['mail'];
    $telefono=$_POST['telefono'];
    $pass=$_POST['pass'];

    $conexion=mysqli_connect('localhost', 'root', '', 'medical_app');
    $verificacion= mysqli_query($conexion, "SELECT * FROM clientes WHERE mail = '$mail' ");

    $res = mysqli_num_rows($verificacion);

    if($res > 0) {

        echo '
        <script>
        alert("Ese nombre ya esta en uso");
        location.href = "php/singin.php";
        </script>    
        ';
        exit;

    }

    $insertar = mysqli_query($conexion, "INSERT INTO clientes (nombre, apellido, mail, edad, antecedentes, telefono, pass) VALUES ('$nombre' ,'$apellido', '$mail', '$edad', 'Nuevo', '$telefono', '$pass')");

    if($insertar){

        echo '
        <script>
        alert("Registro exitoso");
        location.href = "app.php";
        </script>    
        ';
    }

    mysqli_close($conexion);
}

require("../views/singin.php");
