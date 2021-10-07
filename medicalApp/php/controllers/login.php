<?php
session_start();

if(isset($_SESSION['username'])) {
    header("location: app.php");
}
$bError=false;
if(isset($_POST['usuario'])) {

    $usuario=$_POST['usuario'];
    $password=$_POST['password'];
    session_start();

    $conexion=mysqli_connect("localhost", "root", "", "login" );

    $consulta="SELECT*FROM usuarios where usuario='$usuario' and pass='$password'";
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
