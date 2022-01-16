<?php

include("conexion.php");

if(isset($_POST['ingresar'])) {

    $nombre= mysqli_real_escape_string($conexion, $_POST['nombre']); 
    $apellido= mysqli_real_escape_string($conexion, $_POST['apellido']); 
    $edad= mysqli_real_escape_string($conexion, $_POST['edad']); 
    $mail= mysqli_real_escape_string($conexion, $_POST['mail']); 
    $telefono= mysqli_real_escape_string($conexion, $_POST['telefono']); 
    $pass= mysqli_real_escape_string($conexion, $_POST['pass']); 

    $sqluser = "SELECT*FROM clientes WHERE nombre ='$nombre'";
    $resultadouser = $conexion->query($sqluser);
    $filas = $resultadouser->num_rows;

    if ($filas > 0) {
        echo "
        <script>
            alert('El usuario ya existe');
            window.location = 'singin.php';
        </script>";
    }else{
        $sqlusuario = "INSERT INTO clientes (nombre, apellido, mail, edad, telefono, pass)
             VALUES('$nombre', '$apellido', '$mail', '$edad', '$telefono', '$pass')";
             $resultadousuario = $conexion->query($sqlusuario);
             if($resultadousuario > 0){
                echo "
                <script>
                    alert('Registro Exitoso');
                    window.location = 'app.php';
                </script>";
             } else {
                echo "
                <script>
                    alert('Error al Registrar');
                    window.location = 'singin.php';
                </script>";
             }
    }


}

require("../views/singin.php");
