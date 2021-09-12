<?php

$usuario=$_POST['usuario'];
$password=$_POST['password'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost", "root", "", "login" );

$consulta="SELECT*FROM usuarios where usuario='$usuario' and pass='$password'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:app.html");

} else{
    ?>
    <?php
    include("login.php");
    ?>
    <h1 class="bad">Ingrese correctamente sus credenciales</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);