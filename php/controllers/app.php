<?php

include("conexion.php");

foreach ($conexion->query("SELECT*FROM agenda") as $row){

    require ('../views/app.php');

}