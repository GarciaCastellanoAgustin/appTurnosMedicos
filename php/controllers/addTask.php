<?php

include("conexion.php");

if(isset($_POST['enviar'])) {

    $fecha= mysqli_real_escape_string($conexion, $_POST['fecha']); 
    $hora= mysqli_real_escape_string($conexion, $_POST['hora']); 
    $nombreMedico= mysqli_real_escape_string($conexion, $_POST['nombreMedico']); 
    $dni= mysqli_real_escape_string($conexion, $_POST['dni']); 
    $consulta= mysqli_real_escape_string($conexion, $_POST['consulta']); 

    $sqluser = "SELECT*FROM agenda WHERE fecha ='$fecha' AND nombre_medico = '$nombreMedico'";
    $resultadouser = $conexion->query($sqluser);
    $filas = $resultadouser->num_rows;

    if ($filas > 0) {
        echo "
        <script>
            alert('el usuario ya existe');
            window.location = 'singin.php';
        </script>";
    }else{
        $sqlusuario = "INSERT INTO agenda (fecha, hora, dni_cliente, nombre_medico, consulta)
        VALUES('$fecha', '$hora', '$dni', '$nombreMedico', '$consulta')";
             $resultadousuario = $conexion->query($sqlusuario);
             if($resultadousuario > 0){
                echo "
                <script>
                    alert('registro bien');
                    window.location = 'app.php';
                </script>";
             } else {
                echo "
                <script>
                    alert('error al registrar');
                    window.location = 'addTask.php';
                </script>";
             }
    }

}

require("../views/addTask.php");

