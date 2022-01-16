<?php

include("conexion.php");

if (!empty($_POST)) {
    $mail= mysqli_real_escape_string($conexion, $_POST['mail']);
    $pass= mysqli_real_escape_string($conexion, $_POST['pass']);
    $sql = "SELECT*FROM clientes WHERE mail='$mail' AND pass='$pass' ";

    $resultado = $conexion->query($sql);
    $rows = $resultado->num_rows;

    if ($rows > 0) {
        $row = $resultado->fetch_assoc();
        $_SESSION['numero_cliente'] = $row["clientes"];
        header("location: app.php");
    } else {
        echo "
        <script>
            alert('error al registrar');
            window.location = 'login.php';
        </script>";
    }

}


require("../views/login.php");
