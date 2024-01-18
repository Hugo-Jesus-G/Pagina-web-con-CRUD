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

  <title>Loki</title>
</head>

<body class="loki">

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
  <h1 class="text-center my-4"> LOKI </h1>
  <hr>

  <!--Informacion con un pergamino-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-12 text-center centrado">
        <nav class="h-100 flex-column align-items-stretch border-end ">
          <nav class="nav nav-pills flex-column">

            <a class="nav-link enlaces" href="#item-1">Origen en el Comic</a>
            <a class="nav-link enlaces" href="#item-2">Loki, el dios de las mentiras</a>
            <nav class="nav nav-pills flex-column">
              <a class="nav-link ms-3 my-1 enlaces" href="#item-2-1"> De villano a buen hermano</a>
              <a class="nav-link ms-3 my-1 enlaces" href="#item-2-2"> Loki a traves del tiempo </a>
            </nav>
          </nav>
        </nav>
      </div>

      <div class="col-lg-10 col-md-10  col-sm-12 p-5">
        <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">


          <div id="item-1" class="my-5">
            <h5>Inicios del Comic</h5>
            <div class="row">
              <div class="col-lg-7 col-md-6 col-sm-12 centrado">
                <p>
                  Loki es un personaje ficticio que aparece en los cómics publicados por Marvel Comics.
                  Hizo su primera aparición en "Journey into Mystery" #85 en octubre de 1962. Fue creado
                  por el escritor Stan Lee, el guionista Larry Lieber y el dibujante Jack Kirby.
                  <br>
                  En sus primeras apariciones, Loki se presentó como el hermano adoptivo y principal
                  antagonista de Thor, el dios del trueno. Loki es un dios asgardiano y es hijo de Laufey,
                  el rey de los gigantes de hielo. Fue adoptado por Odín, el rey de Asgard, después de que
                  Odin derrotara a los gigantes de hielo en la batalla. A pesar de ser criado junto a Thor,
                  Loki siempre sintió celos y rivalidad hacia su hermano adoptivo.
                  <br>
                  Loki es conocido por su astucia, inteligencia y habilidades mágicas. A lo largo de los
                  cómics, ha sido un villano recurrente, tramando planes para derrotar a Thor y apoderarse
                  de Asgard. Su deseo de poder y su habilidad para la manipulación lo convierten en un
                  adversario formidable. Además de sus habilidades mágicas, Loki también es un hábil
                  combatiente y estratega.
                </p>
              </div>
              <div class="col-lg-5 col-md-6  col-sm-12 centrado">
                <img class="adapta" src="../Recursos/lk1.png">
              </div>
            </div>

            <!--Salvando Marvel Studios-->
            <div id="item-2" class="my-5">
              <div class="row">
                <h5 class="my-5 text-center">Loki el dios de las mentiras</h5>
                <div class="col-lg-6 col-md-6  col-sm-12 centrado">
                  <P>
                    En el Universo Cinematográfico de Marvel (MCU), Loki es interpretado por el actor
                    británico Tom Hiddleston y ha sido un personaje clave desde sus primeras apariciones.
                    Loki hizo su primera aparición en la película "Thor". En esta película, se revela que
                    Loki es el hijo adoptivo de Odin y creció junto a Thor en Asgard. Después de enterarse
                    de su verdadera ascendencia como hijo de Laufey, el rey de los gigantes de hielo, Loki
                    se siente traicionado y busca venganza. A lo largo de la película, Loki manipula eventos
                    para intentar ascender al trono de Asgard.
                    <BR>
                    Loki es el principal antagonista en "The Avengers". Utiliza el Tesseract, una poderosa
                    fuente de energía cósmica, para abrir un portal y permitir que un ejército alienígena
                    invada la Tierra. Su objetivo es subyugar la humanidad y gobernar como rey. Loki es
                    derrotado por los Vengadores y capturado al final de la película.
                    <BR>
                    Loki juega un papel importante en la secuela "Thor: The Dark World". Después de los
                    eventos de "The Avengers", Loki es encarcelado en Asgard. Thor busca su ayuda para
                    detener a una amenaza mayor, pero las verdaderas intenciones de Loki son difíciles
                    de comprender debido a su naturaleza astuta y engañosa.
                  </P>

                </div>
                <div class="col-lg-6 col-md-6  col-sm-12 centrado">
                  <img class="paraimagenes" src="../Recursos/lk2.png">
                </div>
              </div>



            </div>
            <div id="item-2-1" class="my-5">

              <div class="row">
                <h5 class="my-5"> De villano a buen hermano</h5>
                <div class="col-lg-5 col-md-6  col-sm-12 centrado">
                  <img class="adapta" src="../Recursos/lk3.png">
                </div>
                <div class="col-lg-7 col-md-12 p-2  centrado">
                  <p>
                    En Thor Ragnarol Loki se presenta como el gobernante disfrazado de Asgard, cuando
                    Thor y Loki enfrentan a su hermana Hela, Loki toma decisiones que demuestran su
                    conexión y lealtad a su familia, marcando un cambio en su desarrollo.
                    <br>
                    En Infinity War Loki aún tiene elementos de engaño, su breve encuentro con Thanos
                    muestra una brecha de vulnerabilidad. Intenta engañar al Titán Loco, pero falla, y
                    esto resulta en su sacrificio. Este acto muestra un atisbo de redención y amor
                    por su hermano.

                  </p>
                </div>
              </div>


              <div id="item-2-2" class="my-5">
                <div class="row">
                  <h4 class="my-5 text-center">Loki a traves del tiempo</h4>
                  <div class="col-lg-12 col-md-12  col-sm-12 ">
                    <p>La serie comienza justo después de los eventos de "Avengers: Endgame", cuando una versión de Loki
                      de 2012 escapa con el Tesseract durante un altercado con los Vengadores que viajan en el tiempo.
                    </p>

                    <p>Loki es detenido por la AVT, una organización que controla la línea de tiempo y busca corregir
                      las anomalías temporales. Loki es acusado de violar la línea de tiempo y enfrenta la posibilidad
                      de ser eliminado del tiempo si no coopera.</p>

                    <p>Loki es asignado al agente Mobius M. Mobius, interpretado por Owen Wilson, quien trabaja para la
                      AVT. Mobius recluta a Loki para ayudar a enfrentar una amenaza temporal mayor. La serie introduce
                      variantes de Loki, incluida una versión femenina llamada Sylvie, interpretada por Sophia Di
                      Martino. La interacción con estas variantes agrega complejidad a la historia y arroja luz sobre la
                      naturaleza del personaje de Loki.</p>

                    <p>A lo largo de la serie, Loki enfrenta su pasado y sus elecciones. Se exploran aspectos más
                      profundos de su personalidad, incluida su búsqueda de identidad y su deseo de ser reconocido y
                      amado. La trama se adentra en la idea del multiverso y los peligros de las ramificaciones
                      temporales. Loki y Sylvie se embarcan en una misión para descubrir la verdad detrás de la AVT y
                      las motivaciones de aquellos que controlan la línea de tiempo.</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12 col-md-12  col-sm-12 centrado">
                    <img class="paraimagenes" src="../Recursos/lk4.png">
                  </div>
                </div>



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