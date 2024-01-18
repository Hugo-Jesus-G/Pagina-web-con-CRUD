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

  <title>Principal</title>
</head>

<body class="principal">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <!--Navegacion-->
  <nav class="navbar border-bottom border-body navbar-expand-md  " data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand " href="./Principal.php">
        <!--Aqui va el logo de la barra-->
        <img src="../Recursos/logo.jpg" class="logo ">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link text-white enlaces" href="./ComicMCU.php"> Del Comic al MCU</a>
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


  <!--CARRUSEL----->
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div id="carouselExampleIndicators"class="carousel slide" data-bs-ride="carousel">

          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" class="">
              <a href="./Loki.php"><img src="../Recursos/carru1.jpg" class="d-block w-100"></a>
              <div class="carousel-caption">

              <p>Loki</p>
              </div>
            </div>
            <div class="carousel-item" class="">
              <a href="./Thor.php"><img src="../Recursos/carru2.jpg" class="d-block w-100"></a>
              <div class="carousel-caption">

              <p>Thor</p>
              </div>
            </div>
            <div class="carousel-item" class="">
              <a href="./Scarlet.php"> <img src="../Recursos/carru3.jpg" class="d-block w-100"></a>
              <div class="carousel-caption">

              <p>Scarlet</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  </div>

  <hr>

  <!--INFO--->
  <div class="container">
    <div class="row">

      <div class="col-md-6 d-flex justify-content-center align-items-center">
        <div class="row ">
          <img class="paraimagenes" src="../Recursos/Im1.jpeg ">
        </div>
      </div>


      <div class="col-md-6 ">
        <div class=" mt-5 mx-5">


          <h3> El Universo Cinematografico de Marvel</h3>
          <p>
            El Universo Cinematográfico de Marvel (MCU) es una franquicia cinematográfica que
            abarca películas y series de televisión basadas en personajes de Marvel Comics.
            Interconecta historias de superhéroes, como Iron Man, Spider-Man y los Vengadores,
            creando una narrativa compartida que ha generado un fenómeno cultural global.

          </p>
        </div>

        <div class="mt-5 mx-5">
          <h3>Se compone de:</h3>
          <p>
            Hasta Noviembre 2023 el MCU se compone de 33 peliculas, 9 series y 2 especiales.
            Más proyectos se encuentran en produccíon para entrenarse como parte de lo que seran
            sus siguientes fases en los años posteriores.

          </p>
        </div>
      </div>

    </div>
  </div>
  <hr>


  <!--Etiquetas de Personajes --->
  <br>



  <div class="container my-2 text-center">
    <h1> Las caras de MARVEL</h1>
    <div class="row mt-4 ">

      <div class="col-md-4 col-sm-12 my-5">
        <div class="card tarjeta_trans ">
          <img src="../Recursos/perso1.jpg" class="paraimagenes rounded-circle" alt="Spider-Man">

          <div class="card-body">
            <h5 class="card-title my-2">El amigable vecino</h5>
            <p class="card-text mb-4 ">
              Es el superhéroe alter ego de Peter Parker. Mordido por una araña radiactiva, posee
              agilidad, fuerza y un sentido arácnido. Equilibra humor, responsabilidad y heroísmo..</p>
            <a href="./Spidey.php" class="btn btn-primary mb-0">VER MÁS</a>
          </div>
        </div>
      </div>


      <div class="col-md-4 col-sm-12">

        <div class=" card tarjeta_trans my-5">
          <img src="../Recursos/perso3.jpeg" class="paraimagenes rounded-circle" alt="Scarlet-witch">
          <div class="card-body">
            <h5 class="card-title my-2">La Bruja</h5>
            <p class="card-text mb-4 "> La Bruja Escarlata, alias Wanda Maximoff, es una poderosa mutante en el Universo
              Marvel. Manipula la realidad y posee habilidades mágicas. </p>
            <a href="./Scarlet.php" class="btn btn-primary mt-4">VER MÁS</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-12 my-5">
        <div class="card tarjeta_trans ">
          <img src="../Recursos/perso2.jpeg" class=" paraimagenes rounded-circle" alt="Iro man">
          <div class="card-body">
            <h5 class="card-title my-2">El Genio Millonario</h5>
            <p class="card-text mb-5"> Tony Stark tras ser secuestrado, construye una armadura para luchar contra el
              crimen y
              salvar el mundo.</p>
            <a href="./Stark.php" class="btn btn-primary mt-4">VER MÁS</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>










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
            <li><a class="enlaces" href="./Principal.php">Inicio</a></li>
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