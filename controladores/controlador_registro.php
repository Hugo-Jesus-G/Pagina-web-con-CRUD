<?php

session_start();

include("../conexiones/conexion.php");

$conexion = conectar();


if (isset($_POST['enviar'])) {





    if ($_POST['nombre'] !== ""  && $_POST['correo'] !== "" && $_POST['contraseña'] !== "") {


        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $pass = $_POST['contraseña'];

        $consulta = "INSERT INTO informacion(nombre, correo, contraseña) VALUES ('$nombre', '$correo', '$pass')";


        $nombreValidar = false;

        $correoValidar = false;
        $verificar_nombre = mysqli_query($conexion, "SELECT * FROM informacion WHERE nombre='$nombre'");

        if (mysqli_num_rows($verificar_nombre) > 0) {




            echo ("<div id='nombreR' class=' alert alert-danger p-1 mb-0 text-center' role='alert' >EL nombre de usuario ya ha sido registrado</div> <br>");
        } else {

            $nombreValidar = true;
        }
        $verificar_correo = mysqli_query($conexion, "SELECT * FROM informacion WHERE correo='$correo'");
        if (mysqli_num_rows($verificar_correo) > 0) {




            echo ("<div id='correoR' class='alert alert-danger p-1 mt-0 text-center' role='alert' >EL correo electronico ya ha sido registrado</div> ");
        } else {
            $correoValidar = true;
        }




        if ($correoValidar && $nombreValidar) {



            $respuesta = mysqli_query($conexion, $consulta);

            if ($respuesta) {


                echo ("<div id='exito' class='alert alert-success text-center mb-0' role='alert'>Registrado correctamente</div> ");
            } else {


                echo ("<br><div class='alert alert-danger text-center' role='alert'>Ocurrido un Error</div> <br>");
            }
        }
    } else {

        echo ("<br><div class='alert alert-danger p-1 text-center my-0 d-none'>Debes llenar todos los campos </div> <br>");
    }
}
mysqli_close($conexion);