<?php
session_start();


$usuario = $_SESSION['nombre'];

if (!isset($usuario)) {



  header("location:../formularios/login.php");
}


?>







<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="../estilos/bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/estilosConteniodo.css">

  <title>Del Comic al MCU</title>
</head>

<body class="comic">

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

    <h1 class="text-center mb-5"> Del Comic al MCU </h1>
    <div class="row">
      <div class="col-md-6 mb-5 d-flex  justify-content-center align-items-center">
        <img class="adapta3" src="../Recursos/mc1.png" alt="Imagen 1" class="img-fluid">
      </div>
      <div class="col-md-6 d-flex  justify-content-center align-items-center">
        <p>
          La idea de un Universo Cinematográfico de Marvel se basa en la vasta y rica historia de los cómics de Marvel,
          que han estado presentes en la cultura popular desde la década de 1960. Los personajes icónicos, las historias
          complejas
          y la interconexión entre los héroes y villanos crearon un terreno fértil para expandir estas narrativas al
          cine.
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6  mb-5 order-md-2 d-flex  justify-content-center align-items-center">
        <img class="adapta3" src="../Recursos/mc2.jpeg" alt="Imagen 2" class="img-fluid">
      </div>
      <div class="col-md-6  mb-5 d-flex  justify-content-center align-items-center">
        <p>
          Stan Lee, el legendario co-creador de muchos personajes de Marvel, siempre tuvo una visión de ver a sus héroes
          favoritos cobrar vida en la pantalla grande. Su sueño de ver a Spider-Man, Iron Man, Hulk y otros, unidos en
          un
          solo universo cinematográfico, se materializó de manera asombrosa gracias a la evolución de la tecnología
          cinematográfica
          y la visión de los estudios.
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6  mb-5 d-flex  justify-content-center align-items-center">
        <img class="adapta3" src="../Recursos/mc3.jpeg" alt="Imagen 3" class="img-fluid">
      </div>
      <div class="col-md-6  mb-5 d-flex  justify-content-center align-items-center">
        <p>
          Kevin Feige, presidente de Marvel Studios, desempeñó un papel fundamental en la creación del MCU. Su visión a
          largo plazo,
          su comprensión de los personajes y su habilidad para planificar narrativas interconectadas convirtieron a
          Marvel Studios en
          un referente en la industria cinematográfica.
        </p>
      </div>
    </div>
  </div>

  <br>
  <hr>
  <br>


  <div class="container">
    <h1 class="text-center my-5"> Universo Cinematografico de Marvel</h1>
    <div class="row">
      <div class="col-md-6 d-flex justify-content-center align-items-center mb-5">
        <img class="adapta3" src="../Recursos/MC4.jpg" alt="Imagen 1" class="img-fluid">
      </div>
      <div class="col-md-6 d-flex  justify-content-center align-items-center">
        <p>
          El Universo Cinematográfico de Marvel comenzó oficialmente con "Iron Man" en 2008. La decisión de iniciar con
          Iron Man fue audaz y estratégica, ya que no era un héroe tan conocido como Spider-Man o los X-Men, permitiendo
          así establecer las bases para un universo más grande.
          <br> Una de las ideas clave detrás del MCU fue la incorporación de elementos crossover, donde personajes y
          tramas se entrelazan entre películas. Esta conectividad creó un atractivo único para los fanáticos, generando
          expectación y entusiasmo por cada nueva entrega.
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 d-flex  order-md-2 justify-content-center align-items-center">
        <img class="adapta3" src="../Recursos/mc5.jpeg" alt="Imagen 2" class="img-fluid">
      </div>
      <div class="col-md-6 d-flex  justify-content-center align-items-center">
        <p>
          El MCU demostró ser un éxito tanto comercial como crítico. Las películas no solo recaudaron enormes cantidades
          de dinero en taquilla, sino que también fueron elogiadas por la calidad de las historias, la dirección y las
          actuaciones, estableciendo un estándar elevado para el género de superhéroes.</p>
      </div>
    </div>

    <div class="row mb-5">
      <div class="col-md-6 d-flex  justify-content-center align-items-center">
        <img class="adapta3" src="../Recursos/mc6}.jpeg" alt="Imagen 3" class="img-fluid">
      </div>
      <div class="col-md-6 d-flex  justify-content-center align-items-center">
        <p>
          A medida que el MCU creció, también lo hizo la variedad de géneros y estilos de las películas. Desde aventuras
          espaciales como "Guardians of the Galaxy" hasta historias de espionaje como "Captain America: The Winter
          Soldier", la expansión del universo demostró la versatilidad de los personajes de Marvel.
          <br> La concepción del Universo Cinematográfico de Marvel trascendió la pantalla y se convirtió en un fenómeno
          cultural. Los personajes, símbolos y frases icónicas se incorporaron en la sociedad de una manera única,
          consolidando la importancia de Marvel en la cultura popular contemporánea.

        </p>
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