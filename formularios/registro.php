<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registro</title>


    <link rel="stylesheet" href="../estilos/bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../estilos/bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/css/bootstrap.css">

    <link rel="stylesheet" href="../estilos/bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/estilos.css">
</head>

<body class="fondoRegistro">




    <div class="container w-75   my-5 ">
        <div class="row g-0 aling-items-stretch">


            <div class="col imagenRegistro d-none d-sm-block  col-md-6 col-lg-6 col-xl-6 bordesI ">

            </div>





            <div class="col text-bg-dark p-5 col-md-6 col-lg-6 col-xl-6 bordesR">

                <h2 class="fw-bold text-center py-1 my-1">Registrate</h2>


                <form method="post" action="" id="form-registro" class="needs-validation" novalidate>
                    <?php


                    header("Cache-Control: no-cache, must-revalidate");

                    include("../controladores/controlador_registro.php");
                    ?>

                    <div class="col-lg-12 mb-2">
                        <label for="nombre" class="form-label fw-bold"> Usuario</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa un usuario" required>
                        <div class="valid-feedback">
                            Correcto
                        </div>
                        <div class="invalid-feedback">
                            Debe de ingresar un nombre de usuario </div>
                    </div>

                    <div class="col-lg-12 mb-2">
                        <label for="correo" class="form-label fw-bold"> Correo Electronico</label>
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="usuario@example.com" required>
                        <div class="valid-feedback">
                            Correcto
                        </div>
                        <div class="invalid-feedback ">
                            Debe de ingresar un Correo Valido

                        </div>


                    </div>

                    <div class=" col-lg-12 mb-4">
                        <label for="contraseña" class="form-label fw-bold"> Contraseña</label>
                        <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Ingresa una contraseña" required>
                        <div class="valid-feedback">
                            Correcto

                        </div>
                        <div class="invalid-feedback">
                            Debe de ingresar una contraseña

                        </div>
                    </div>

                    <div class="d-grid">


                        <input type="submit" class="btn btn-outline-primary" name="enviar" value="Registrate">



                    </div>


                    <div class="my-3" id="respuesta">


                    </div>


                    <div class="my-3">


                    </div>
                    <span>¿Ya estás registrado? <a href="login.php">Iniciar Sesión</a></span>

                </form>

            </div>

        </div>
    </div>








<script src="../JS/validacion.js"></script>
    <script src="estilos/bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/js/bootstrap.bundle.js"></script>




</body>

</html>