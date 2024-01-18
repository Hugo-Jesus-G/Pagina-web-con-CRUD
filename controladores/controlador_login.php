<?php

session_start();

include("../conexiones/conexion.php");

$conexion = conectar();


if (isset($_POST['iniciar'])) {





    if ($_POST['nombre'] !== ""  && $_POST['correo'] !== "" && $_POST['contraseña'] !== "") {


        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $pass = $_POST['contraseña'];

        $consulta = "INSERT INTO informacion(nombre, correo, contraseña) VALUES ('$nombre', '$correo', '$pass')";



        $existencia = mysqli_query($conexion, "SELECT * FROM informacion WHERE nombre='$nombre' and contraseña='$pass' and correo='$correo'");

        if (mysqli_num_rows($existencia) > 0) {
            $_SESSION['nombre'] = $nombre;
            $_SESSION['correo'] = $correo;
            $_SESSION['pass'] = $pass;
          

            header("location: ../paginas/principal.php");
        } else {

            echo ("<div id='nombreR' class=' alert alert-danger p-1 mb-0 text-center' role='alert' >EL Usuario No existe</div> <br>");
        }
    } else {

        echo ("<div class='alert alert-danger p-1 text-center my-0 d-none'>Debes llenar todos los campos </div> ");
    }
}

mysqli_close($conexion);
