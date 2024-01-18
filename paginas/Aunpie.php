<?php
session_start();


$usuario = $_SESSION['nombre'];

if (!isset($usuario)) {



  header("location:../formularios/login.php");
}


?>





<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="../estilos/bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/estilosConteniodo.css">

  <title>A un pie de</title>
</head>

<body class="apie"> 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


  <!--Navegacion-->
  <nav class="navbar border-bottom border-body navbar-expand-md  " data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand " href="./Principal.php">
        <!--Aqui va el logo de la barra-->
        <img src="../Recursos/logo.jpg" class="logo " alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white enlaces" aria-current="page" href="./Principal.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white enlaces" href="./ComicMCU.php"> Del Comic al MCU</a>
          </li>
          <!--Barra desplegable-->
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
        <div class="text-white bg-success p-1 m-2 ">
          <?php


          echo $_SESSION['nombre'];
          ?>
        </div></a>

        <button class="btn btn-dark "><a class="nav-item nav-link text-justify hover-primary enlaces" href="../sesiones/cerrar_sesion.php">Cerrar Sesion</a>
        </button>





      </div>
    </div>
  </nav>



  <div class="container ">

    <br>


    <div class="container">
      <h1 class="text-center my-5"> Lo que pudo ser y no fue en el MCU</h1>
      <h3 class="text-center mb-5"> Tom Hiddleston como Thor.</h3>
      <div class="row">
        <div class="col-md-6 d-flex centrado mb-5">
          <img class="paraimagenes2" src="../Recursos/lqps1.png" alt="Imagen 1" class="img-fluid">
        </div>
        <div class="col-md-6 d-flex  justify-content-center align-items-center">

          <p>
            Tom Hiddleston es conocido por su papel como Loki, el hermano adoptivo y principal
            antagonista de Thor. Chris Hemsworth es el actor que ha interpretado a Thor en las
            películas del MCU desde su primera aparición en "Thor" en 2011.
            <BR>
            Sin
            embargo, se reveló que su audición en Marvel, no fue para el personaje de Loki,
            sino mas bien para el dios del trueno Thor, en internet rondan videos de esta audición,
            sin embargo no fue seleccionado y paso a ser de Chris Hermsworth, tiempo más tarde se
            volvería en el dios del engaño interpretando hasta la actualidad al personaje del dios
            de las mentiras.

          </p>
        </div>
      </div>
      <br> <BR>
      <h3 class="text-center mb-5"> Quicksilver de regreso al MCU Principal</h3>
      <hr>
      <BR>
      <div class="row">
        <div class="col-md-6 d-flex  order-md-2 centrado">
          <img class="paraimagenes2" src="../Recursos/lqps2.png" alt="Imagen 2" class="img-fluid">
        </div>
        <div class="col-md-6 d-flex  centrado">
          <p>
            Quicksilver (interpretado por Aaron Taylor-Johnson) fue eliminado de la serie
            por la división de derechos que tuvieron Fox y Marvel Studios, donde Marvel
            decidió quedarse con Wanda y Fox con Quicksilver.
            <br> <br>
            Existieron teorías y especulaciones sobre si el personaje podría regresar en
            futuras películas o series, especialmente considerando el multiverso y las
            posibles conexiones con los X-Men. Sin embargo, dicho personaje con Aaron
            jamás ha regresado, pero la versión de Fox tuvo su reaparición en Wandavision.

          </p>
        </div>
      </div>
      <BR>
      <h3 class="text-center my-5"> Cameo no realizado de Doctor Strange en Wandavision</h3>
      <HR>
      <div class="row mb-5">
        <div class="col-md-6 d-flex  centrado">
          <img class="paraimagenes" src="../Recursos/lqps3.png" alt="Imagen 3" class="img-fluid">
        </div>
        <div class="col-md-6 d-flex  centrado">
          <hr>
          <p>
            Aunque había especulaciones y expectativas de que el Doctor Strange
            (interpretado por Benedict Cumberbatch) haría un cameo en la serie
            "WandaVision", esto no sucedió en la primera temporada de la serie.
            Aunque la serie estableció conexiones con la película "Doctor Strange
            in the Multiverse of Madness", el Doctor Strange no hizo una aparición
            física en "WandaVision".
            <br> <br>
            Dado que la pandemia afecto a diversos cameos planificados para la serie,
            dejando en su lugar el comentario en la secuela de Doctor Strange, donde
            este le dice que estaba al tanto de lo sucedido del Hex.

          </p>
        </div>
      </div>
    </div>
    </div>

    <footer class="footer pie text-light text-center ">
    <div class="container">
      <div class="row">


        <div class="col-lg-4 col-sm-12 mt-5">
          <figure>
            <a href="./Principal.php">

              <img src="../Recursos/logo.jpg" class="logo " alt="logo de creadores">
            </a>

            <figcaption>
              <p>&copy logo oficial hugo&tony 2023</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-lg-4 col-sm-12 mt-5">
          <h5 class="mb-4">Información de contacto</h5>
          <p>Hugo Jesus Guevara Cocolotl-202067905</p>

          <p>
            Carlos Antonio Arenas Breton - 202027778


          </p>
        </div>
        <div class="col-lg-4 col-sm-12 my-5 ">
          <h5>Enlaces rápidos</h5>
          <ul class="list-unstyled">
            <li><a class="enlaces" href="Principal.php">Inicio</a></li>
            <li><a class="enlaces" href="#">Acerca de nosotros</a></li>
            <li><a class="enlaces" href="https://www.marvel.com/">sitio Oficial MARVEL</a></li>
            <li><a class="enlaces" href="https://secreacademica.cs.buap.mx/">Facultad de Ciencias de la Computacion</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>




</body>

</html>