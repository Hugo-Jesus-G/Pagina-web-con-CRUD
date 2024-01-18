<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Login</title>


    <link rel="stylesheet" href="../estilos/bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../estilos/bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/estilos.css">

</head>

<body class="fondoLogin">




    <div class="container w-75   my-5 ">
        <div class="row g-0 aling-items-stretch">


            <div class="col imagen d-none d-sm-block  col-md-5 col-lg-5 col-xl-6 bordesI">

            </div>


            <div class="col text-bg-dark p-5 bordesR">

                <h2 class="fw-bold text-center py-1 my-1 ">Login</h2>

                <form method="post" class="needs-validation" novalidate>
                    <?php
                    include("../controladores/controlador_login.php");
                    ?>
                    <div class="col-lg-12 mb-2">
                        <label for="nombre" class="form-label fw-bold"> Usuario</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu usuario" required>
                        <div class="valid-feedback">
                            Correcto
                        </div>
                        <div class="invalid-feedback">
                            Usuario invalido
                        </div>
                    </div>

                    <div class="col-lg-12 mb-2">
                        <label for="correo" class="form-label fw-bold"> Correo Electronico</label>
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="tuCorreo@example.com" required>
                        <div class="valid-feedback">
                            Correcto
                        </div>
                        <div class="invalid-feedback">
                            correo Invalido

                        </div>


                    </div>

                    <div class=" col-lg-12 mb-4">
                        <label for="contraseña" class="form-label fw-bold"> Contraseña</label>
                        <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Ingresa tu contraseña" required>
                        <div class="valid-feedback">
                            Correcto

                        </div>
                        <div class="invalid-feedback">
                            contraseñaInvalida

                        </div>
                    </div>

                    <div class="d-grid">
                        <input type="submit" name="iniciar" class="btn btn-outline-primary" value="Iniciar Sesion">



                    </div>

                    <div class="my-3">

                        <span>No estas Registrado? <a href="registro.php"> Registrate</a></span>

                    </div>



                </form>





            </div>



        </div>




    </div>








    <script src="estilos/bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/js/bootstrap.bundle.js"></script>
    <script src="JS/validacion.js"></script>

</body>

</html>