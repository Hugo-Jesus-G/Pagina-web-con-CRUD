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

  <title>Otros Universos</title>
</head>

<body class="universo">

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

  <br>

  <div class="container ">



    <div class="container">
      <h1 class="text-center my-5"> Otros Universos fuera del MCU</h1>
      <hr>
      <h3 class="text-center my-5"> Universo de Fox | Logal Wolverine</h3>
      <div class="row">
        <div class="col-md-6 d-flex justify-content-center align-items-center mb-5">
          <img class="paraimagenes" src="../Recursos/mu1.png" alt="Imagen 1" class="img-fluid">
        </div>
        <div class="col-md-6 d-flex  justify-content-center align-items-center">

          <p>
            TEn el universo cinematográfico de 20th Century Fox (también conocido como el Fox Universe),
            el personaje de Wolverine, interpretado por Hugh Jackman, tuvo una presencia significativa
            a lo largo de varias películas de los X-Men.
            <br>
            Wolverine hace su primera aparición en la primera película de los X-Men. La película establece
            el personaje y su relación con Charles Xavier y los demás mutantes. Wolverine juega un papel
            crucial en la secuela, donde los mutantes enfrentan una amenaza que podría resultar en su
            exterminio.
            <br>
            Logan (2017): "Logan" es la última película de Hugh Jackman como Wolverine y se establece en
            un futuro alternativo y sombrío. La película es aclamada por su enfoque más oscuro y maduro
            del personaje.
            <br>
            Es importante destacar que con la adquisición de 21st Century Fox por parte de Disney, los
            derechos cinematográficos de los personajes de los X-Men, incluido Wolverine, pasaron a Marvel
            Studios, lo que podría dar lugar a futuras interpretaciones del personaje en el Universo
            Cinematográfico de Marvel (MCU).
            <br>

          </p>
        </div>
      </div>
      <hr>
      <h3 class="text-center my-5"> Spider-Man | Raimi Sony</h3>
      
      <BR>
      <div class="row">
        <div class="col-md-6 d-flex  order-md-2 justify-content-center align-items-center">
          <img class="paraimagenes" src="../Recursos/mu2.png" alt="Imagen 2" class="img-fluid">
        </div>
        <div class="col-md-6 d-flex  justify-content-center align-items-center">
          <p>
            El Spider-Man del universo de Sam Raimi se refiere a la trilogía de películas
            de Spider-Man dirigidas por Sam Raimi y protagonizadas por Tobey Maguire como
            Peter Parker/Spider-Man. Esta trilogía fue lanzada entre 2002 y 2007 y se
            considera una de las primeras y más exitosas adaptaciones cinematográficas
            de Spider-Man.


            <br> <br>
            Las películas del universo de Sam Raimi presentan a Tobey Maguire como Peter Parker,
            un estudiante de secundaria que, tras ser mordido por una araña genéticamente modificada,
            adquiere habilidades sobrehumanas y asume la identidad de Spider-Man. A lo largo de
            la trilogía, Peter enfrenta desafíos personales y profesionales mientras lucha
            contra diversos villanos, incluidos el Green Goblin, el Doctor Octopus y Venom.
            <br>
            Las películas exploran temas de responsabilidad, sacrificio y la dualidad inherente
            al ser un superhéroe. La relación de Peter con Mary Jane Watson y su amistad complicada
            con Harry Osborn añaden capas emocionales a la narrativa, creando un arco heroico que
            se extiende a lo largo de las tres entregas. Estas películas dejaron una marca
            significativa en la cultura pop y son recordadas por su enfoque emocional y
            visualmente impactante del icónico personaje de Spider-Man.







          </p>
        </div>
      </div>
      <hr>
      <h3 class="text-center my-5"> Spider-Man | Amazing </h3>
      
      <div class="row mb-5">
        <div class="col-md-6 d-flex  justify-content-center align-items-center">
          <img class="paraimagenes" src="../Recursos/mu3.png" alt="Imagen 3" class="img-fluid">
        </div>
        <div class="col-md-6 d-flex  justify-content-center align-items-center">
          <hr>
          <p>
            Las dos películas del universo "The Amazing Spider-Man" presentan a Andrew Garfield
            en el papel de Peter Parker/Spider-Man. En "The Amazing Spider-Man" (2012), dirigida
            por Marc Webb, la historia sigue a Peter Parker mientras descubre sus habilidades
            arácnidas después de ser mordido por una araña genéticamente modificada. La trama
            se centra en la búsqueda de Peter para comprender la verdad detrás de la desaparición
            de sus padres y su enfrentamiento con el Lagarto, el alter ego del Dr. Curt Connors
            (Rhys Ifans). La película también explora la relación romántica entre Peter y Gwen Stacy
            (Emma Stone).
            <br>
            En la secuela, "The Amazing Spider-Man 2" (2014), Peter continúa su lucha contra el
            crimen como Spider-Man mientras enfrenta nuevos desafíos, incluido Electro (Jamie Foxx)
            y el Duende Verde (Dane DeHaan). La relación de Peter con Gwen se desarrolla mientras
            lidian con las complicaciones de su vida como superhéroe. Sin embargo, la película
            también enfrenta a Peter a eventos trágicos que tienen un impacto duradero en su
            viaje heroico.
            <br>
            Estas películas del universo "The Amazing Spider-Man" buscan reinventar la historia
            de Spider-Man con un enfoque más contemporáneo y emocional. Aunque la recepción crítica
            fue mixta, Andrew Garfield recibió elogios por su actuación, y las películas exploran
            temas más oscuros y personales en comparación con las adaptaciones anteriores. A pesar
            de que se planeó una tercera película, la franquicia se detuvo y Spider-Man fue
            reintegrado al Universo Cinematográfico de Marvel.

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