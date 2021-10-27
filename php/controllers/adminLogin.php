<?php

$bError=false;
if(isset($_POST['dni'])) {

    $dni=$_POST['dni'];
    $pass=$_POST['pass'];
    session_start();

    include("conexion.php");

    $consulta="SELECT*FROM empleados where dni_empleado='$dni' and pass='$pass'";
    $resultado=mysqli_query($conexion, $consulta);

    $filas=mysqli_num_rows($resultado);
    
    if($filas>0){
        $_SESSION['username']=$usuario;
        header("location: app.php");
    }
    $bError=true;
    mysqli_close($conexion);
}

require("../views/adminLogin.php");