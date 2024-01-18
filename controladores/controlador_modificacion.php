<?php






include("../conexiones/conexion.php");

$conexion = conectar();
$nombre = $_SESSION['nombre'];
$correo = $_SESSION['correo'];
$pass = $_SESSION['pass'];


if (isset($_POST['eliminar'])) {



    $consulta = "DELETE FROM informacion Where nombre='$nombre' ";

    mysqli_query($conexion, $consulta);


    header("location:../formularios/login.php");
}

if (isset($_POST['modificar'])) {
    if ($_POST['nombre'] === ""  && $_POST['correo'] === "" && $_POST['contraseña'] === "") {


        echo ("<div id='nombreR' class=' alert alert-danger p-1 mb-0 text-center' role='alert' >No se modifico ningun dato</div> <br>");
    }



    if ($_POST['nombre'] !== "") {
        $usuario = $_POST['nombre'];

        $verificar_nombre = mysqli_query($conexion, "SELECT * FROM informacion WHERE nombre='$usuario'");

        if (mysqli_num_rows($verificar_nombre) > 0) {




            echo ("<div id='nombreR' class=' alert alert-danger p-1 mb-0 text-center' role='alert' >EL nombre de usuario ya ha sido registrado</div> <br>");
        } else {


            $actualizaNombre = "UPDATE informacion SET nombre ='$usuario' WHERE nombre = '$nombre'";
            mysqli_query($conexion, $actualizaNombre);
            $_SESSION['nombre'] = $usuario;
            echo ("<div id='nombreR' class=' alert alert-success p-1 mb-0 text-center' role='alert' > se modifico el Nombre de Usuario</div> ");
        }
    }
    if ($_POST['correo'] !== "") {

        $email = $_POST['correo'];
        $verificar_correo = mysqli_query($conexion, "SELECT * FROM informacion WHERE correo='$email'");
        if (mysqli_num_rows($verificar_correo) > 0) {

            echo ("<div id='correoR' class='alert alert-danger p-1 mt-0 text-center' role='alert' >EL correo electronico ya ha sido registrado</div> ");
        } else {

            $actualizaCorreo = "UPDATE informacion SET correo ='$email' WHERE correo = '$correo'";
            mysqli_query($conexion, $actualizaCorreo);

            echo ("<div id='nombreR' class=' alert alert-success p-1 mb-0 text-center' role='alert' >se modifico Tu correo</div> ");
        }
    }







    if ($_POST['contraseña'] !== "") {

$contraseña=$_POST['contraseña'];

        $actualizaPass = "UPDATE informacion SET contraseña ='$contraseña' WHERE contraseña = '$pass'";
        mysqli_query($conexion, $actualizaPass);


        echo ("<div id='nombreR' class=' alert alert-success p-1 mb-0 text-center' role='alert' > se modifico tu Contraseña</div> ");
    
    
    
    
    
    }
}
mysqli_close($conexion);
