<?php

function conectar(){


$usuario = "root";
$pass = "";
$host = "localhost";
$nombreBase = "datos";
$conexion = mysqli_connect($host, $usuario, $pass,$nombreBase);
return $conexion;

}
?>