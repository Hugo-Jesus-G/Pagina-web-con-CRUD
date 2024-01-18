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

  <title>Scarlet Witch </title>
</head>

<body class="scarlet">

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
  <h1 class="text-center my-4"> Scarlet Witch</h1>
  <hr>

  <!--Informacion con un pergamino-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-12 text-center centrado">
        <nav class="h-100 flex-column align-items-stretch border-end ">
          <nav class="nav nav-pills flex-column">

            <nav class="nav nav-pills flex-column">
              <a class="nav-link ms-3 my-1 enlaces" href="#item-1-1">Inicios del comic</a>
              <a class="nav-link ms-3 my-1 enlaces" href="#item-1-2">Derechos entre Fox/MarvelStudios</a>
            </nav>
            <a class="nav-link enlaces" href="#item-2">Wanda Maximoff</a>
            <a class="nav-link enlaces" href="#item-3">Scarlet Witch</a>
          </nav>
        </nav>
      </div>

      <div class="col-lg-10 col-md-10  col-sm-12 p-5">
        <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">


          <div id="item-1-1" class="my-5">
           
            <div class="row"> <h5>Inicios del Comic</h5>
              <div class="col-lg-7 col-md-6 col-sm-12 centrado">
                <p>
                  La primera aparición de Wanda Maximoff, también conocida como la Bruja Escarlata,
                  fue en "X-Men" #4, publicado en marzo de 1964. En ese cómic, fue creada por Stan Lee
                  y Jack Kirby. Este fue el comienzo de su historia en los cómics de Marvel. D
                  esde entonces, el personaje ha tenido un papel importante en varias historias y
                  series dentro del universo de Marvel Comics.


                </p>
              </div>
              <div class="col-lg-5 col-md-6  col-sm-12 centrado">
                <img class="adapta" src="../Recursos/wm1.jpg">
              </div>
            </div>


          </div>


          <div id="item-1-2" class="my-5">

            <div class="row ">
              <h5>Derechos entre Fox y Marvel Studios</h5>
              <div class="col-lg-5 col-md-6  col-sm-12 centrado mt-5 ">

                <img class="adapta" src="../Recursos/wm2.png">
              </div>
              <div class="col-lg-7 col-md-5 p-2  mt-5">


                <p> Wanda Maximoff, interpretada por Elizabeth Olsen, y su hermano Pietro Maximoff,
                  interpretado por Aaron Taylor-Johnson, fueron introducidos en el Universo
                  Cinematográfico de Marvel (MCU) a través de "Avengers: Age of Ultron" (2015).
                  Sin embargo, es importante destacar que en ese momento, los derechos cinematográficos
                  de los personajes de los X-Men, incluidos Quicksilver y Scarlet Witch (Pietro y
                  Wanda Maximoff), estaban bajo la propiedad de 20th Century Fox. 

                  <br>  <br> Esto llevó a una situación única en la que tanto Marvel Studios (que produce las
                  películas del MCU) como 20th Century Fox (que tenía los derechos de los X-Men)
                  tenían versiones de los personajes Quicksilver y Scarlet Witch, y ambas compañías
                  podían usar los personajes por separado en sus respectivas franquicias cinematográficas. </p>

              </div>

            </div>

            <div class="row ">

              <div class="col-lg-7 col-md-5 p-2 centrado">


                <p> El Quicksilver interpretado por Evan Peters apareció en películas de
                  X-Men producidas por 20th Century Fox, como "X-Men: Days of Future
                  Past" (2014) y "X-Men: Apocalypse" (2016). 

               La situación cambió cuando The Walt Disney Company adquirió 20th Century
                  Fox en 2019. Esto significó que los derechos cinematográficos de los
                  personajes de los X-Men, incluidos Quicksilver y Scarlet Witch, volvieron
                  a estar bajo el control de Marvel Studios. </p>

              </div>

              <div class="col-lg-5 col-md-6  col-sm-12 centrado ">

                <img class="adapta" src="../Recursos/wm3.png">
              </div>


            </div>



          </div>


          <div id="item-2" class="my-5">
            <div class="row">
              <h4>Wanda Maximoff</h4>
              <div class="col-lg-7 col-md-5 p-2 centrado ">

                <p>Fue una nativa de Sokovia, donde creció en compañía de su hermano
                  gemelo, Pietro. Nacida con la habilidad mágica latente para manipular
                  la Magia Caótica, Maximoff desarrolló un odio contra Anthony Stark y
                  Estados Unidos después de los bombardeos de Novi Grad con misiles de
                  Industrias Stark, que mataron a sus padres. En un esfuerzo por ayudar
                  a librar a su país de los conflictos, los gemelos se sometieron a
                  experimentos supervisados por el líder de HYDRA, Wolfgang von Strucker,
                  con la Gema de la Mente despertando y aumentando las habilidades mágicas
                  con las que Maximoff había nacido.

                  <br>
                  Mientras que su hermano obtuvo velocidad sobrehumana, Wanda adquirió una
                  serie de poderes psiónicos. Cuando HYDRA cayó, los gemelos se unieron al
                  robot Ultrón para obtener venganza sobre Anthony Stark, pero finalmente
                  cambiaron de bando y se unieron a los Vengadores cuando descubrieron las
                  verdaderas intenciones de Ultrón. Aunque Pietro fue asesinado, Wanda
                  sobrevivió y poco después se mudó al Centro de los Nuevos Vengadores
                  en los Estados Unidos.

                </p>

              </div>
              <div class="col-lg-5 col-md-6  col-sm-12 centrado">
                <img class="adapta " src="../Recursos/wm4.png">
              </div>

            </div>





          </div>
          <div id="item-3" class="my-5">
            <div class="row">
              <h4>La Bruja Escarlata</h4>
              <div class="col-lg-5 col-md-6  col-sm-12 centrado mt-4">
                <br>
                <img class="paraimagenes" src="../Recursos/wm5.jpeg">
              </div>
              <div class="col-lg-7 col-md-5 p-2 centrado">
                <br>
                <p> Wanda inicialmente entra en conflicto con Los Vengadores, pero
                  luego se une a ellos y se convierte en uno de los miembros más
                  poderosos.3 Ella desarrolla una relación romántica con Visión, y
                  después de su muerte y el Blip, Wanda se vuelve mentalmente
                  inestable y usa sus habilidades para manipular a todo un pueblo
                  en una realidad falsa que crea a su gusto. Esto la pone en
                  conflicto con S.W.O.R.D. y Agatha Harkness, lo que la hizo
                  finalmente liberar a la ciudad y aprovechar sus poderes latentes
                  cuando asume el antiguo título de la Bruja Escarlata.4

                  <br>
                  Poco después, utiliza el Darkhold en un esfuerzo por localizar versiones
                  alternativas de sus hijos, Billy y Tommy, a quienes creó en su falsa realidad.
                  Corrompida por el libro, intenta capturar a América Chávez para extraer sus
                  poderes y apoderarse del multiverso, chocando con Stephen Strange y los
                  Maestros de las Artes Místicas. Usando un hechizo conocido como caminar
                  en sueños, Wanda posee una de sus contrapartes de la Tierra-838 y asesina
                  a la mayoría de los Illuminati antes de que se rompa su control sobre Wanda
                  de 838. Finalmente, al darse cuenta del daño que ha causado, destruye todas
                  las copias de Darkhold en el multiverso y colapsa el Monte Wundagore sobre
                  sí misma, sacrificándose para salvar el multiverso.
                </p>

              </div>

            </div>
          </div>








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