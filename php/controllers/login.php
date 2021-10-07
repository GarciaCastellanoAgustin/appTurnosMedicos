<?php

$bError=false;
if(isset($_POST['mail'])) {

    $mail=$_POST['mail'];
    $pass=$_POST['pass'];
    session_start();

    $conexion=mysqli_connect('localhost', 'root', '', 'medical_app');

    $consulta="SELECT*FROM clientes where mail='$mail' and pass='$pass'";
    $resultado=mysqli_query($conexion, $consulta);

    $filas=mysqli_num_rows($resultado);
    
    if($filas>0){
        $_SESSION['username']=$usuario;
        header("location: app.php");
    }
    $bError=true;
    mysqli_close($conexion);
}

require("../views/login.php");
