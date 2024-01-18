<?php
session_start();


$usuario = $_SESSION['nombre'];
$correo = $_SESSION['correo'];
$pass = $_SESSION['pass'];

if (!isset($usuario)) {



    header("location:../formularios/login.php");
}


?>






<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Configuracion</title>


    <link rel="stylesheet" href="../estilos/bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../estilos/bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/estilos.css">
    <link rel="stylesheet" href="../estilos/bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/estilosConteniodo.css">

</head>

<body class="config">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!--Navegacion-->
    <nav class="navbar border-bottom border-body navbar-expand-md  " data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand " href="../paginas/Principal.php">
                <!--Aqui va el logo de la barra-->
                <img src="../Recursos/logo.jpg" class="logo ">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link text-white enlaces" href="../paginas/ComicMCU.php"> Del Comic al MCU</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white enlaces" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Otros
                        </a>
                        <ul class="dropdown-menu bg-dark">
                            <li><a class="dropdown-item text-white enlaces" href="./Aunpie.php">A un pie de</a></li>
                            <li><a class="dropdown-item text-white enlaces" href="./Universos.php"> Más Universos</a></li>

                        </ul>
                    </li>

                </ul>
                <a href="../configuracion/configuracion.php">
                    <div class="text-white bg-success  p-1 m-2 ">
                        <?php


                        echo $_SESSION['nombre'];
                        ?>
                    </div>
                </a>

                <button class="btn btn-dark "><a class="nav-item nav-link text-justify hover-primary enlaces" href="../sesiones/cerrar_sesion.php">Cerrar Sesion</a>
                </button>


            </div>
        </div>
    </nav>



    <div class="container w-60  col-sm-6     ">





        <div class="col text-bg-dark p-5   ">

            <h2 class="fw-bold text-center  my-1 col-sm-6  ">Configuracion</h2>

            <form method="post">
                <?php
                include("../controladores/controlador_modificacion.php");
                ?>
                <div class="col-lg-12 mb-2 col-sm-12">
                    <label for="nombre" class="form-label fw-bold"> Usuario</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu usuario">
                    <div class="valid-feedback">
                        Correcto
                    </div>
                    <div class="invalid-feedback">
                        Usuario invalido
                    </div>
                </div>

                <div class="col-lg-12 mb-2 col-sm-12">
                    <label for="correo" class="form-label fw-bold"> Correo Electronico</label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="tuCorreo@example.com">
                    <div class="valid-feedback">
                        Correcto
                    </div>
                    <div class="invalid-feedback">
                        correo Invalido

                    </div>


                </div>

                <div class=" col-lg-12 mb-4 col-sm-12">
                    <label for="contraseña" class="form-label fw-bold"> Contraseña</label>
                    <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Ingresa tu contraseña">
                    <div class="valid-feedback">
                        Correcto

                    </div>
                    <div class="invalid-feedback">
                        contraseñaInvalida

                    </div>
                </div>

                <div class="d-grid">
                    <input type="submit" name="modificar" class="btn btn-outline-primary" value="Modificar Datos">



                </div>

                <div class="d-grid mt-2">
                    <input type="submit" name="eliminar" class="btn btn-outline-danger " value="Eliminar Cuenta" onclick="return confirmacion()">



                </div>


            </form>





        </div>








    </div>








    <script src="estilos/bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/js/bootstrap.bundle.js"></script>
    <script src="../JS/confirmacion.js"></script>

</body>

</html>