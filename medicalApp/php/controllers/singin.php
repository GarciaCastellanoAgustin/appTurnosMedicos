<?php

if(isset($_POST['nombre'])) {

    $usuario=$_POST['nombre'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $pass=$_POST['pass'];

    $conexion=mysqli_connect('localhost', 'root', '', 'login');
    $verificacion= mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' ");

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

    $insertar = mysqli_query($conexion, "INSERT INTO usuarios (usuario, pass, correo, telefono) VALUES ('$usuario', '$pass', '$correo', '$telefono')");

    if($insertar){

        echo '
        <script>
        alert("Registro exitoso");
        location.href = "../app.html";
        </script>    
        ';
    }

    mysqli_close($conexion);
}

require("../views/signin.php");
?>