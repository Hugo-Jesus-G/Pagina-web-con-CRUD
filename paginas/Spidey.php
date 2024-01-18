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

  <title>Spider-Man</title>
</head>

<body class="">

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
  <h1 class="text-center my-4"> SPIDER-MAN</h1>
  <hr>

  <!--Informacion con un pergamino-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-12 text-center centrado">
        <nav class="h-100 flex-column align-items-stretch border-end ">
          <nav class="nav nav-pills flex-column">

            <nav class="nav nav-pills flex-column">
              <a class="nav-link ms-3 my-1 enlaces" href="#item-1-1">Inicios del comic</a>
              <a class="nav-link ms-3 my-1 enlaces" href="#item-1-2">¿De Sony al MCU?</a>
            </nav>
            <a class="nav-link enlaces" href="#item-2">Homecoming</a>
            <a class="nav-link enlaces" href="#item-3">Far Frome Home</a>
            <a class="nav-link enlaces" href="#item-4">No Way Home</a>
            <nav class="nav nav-pills flex-column">
              <a class="nav-link ms-3 my-1 enlaces" href="#item-4-1"> Conexión al Sony Universe</a>
              <a class="nav-link ms-3 my-1 enlaces" href="#item-4-2"> Años futuros</a>
            </nav>
          </nav>
        </nav>
      </div>

      <div class="col-lg-10 col-md-10  col-sm-12 p-5">
        <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">


          <div id="item-1-1" class="my-5">
            <h5>Inicios del Comic</h5>
            <div class="row">
              <div class="col-lg-7 col-md-6 col-sm-12 centrado">
                <p>
                  Spider-Man fue creado por el legendario equipo creativo de Marvel Comics, Stan Lee y
                  Steve Ditko. Su
                  primera aparición fue en "Amazing Fantasy" #15, lanzado en agosto de 1962. La idea
                  de Spider-Man
                  surgió de la búsqueda de Marvel por un superhéroe más joven y atractivo para el
                  público adolescente.
                  Stan Lee concibió la historia de un estudiante tímido llamado Peter Parker que,
                  después de ser mordido
                  por una araña radiactiva en un experimento científico, adquiere habilidades
                  sobrehumanas.
                  Steve Ditko, el artista colaborador, contribuyó significativamente al diseño del
                  traje icónico de
                  Spider-Man y a la representación visual del personaje. La combinación de la
                  narrativa cautivadora de
                  Lee y la estética distintiva de Ditko culminó en un personaje que resonó con los
                  lectores y se
                  convirtió en uno de los superhéroes más queridos y reconocidos en la historia del
                  cómic. La
                  introducción de Spider-Man marcó el comienzo de una era para Marvel Comics y
                  contribuyó en gran medida
                  a la expansión del género de superhéroes en la cultura popular.

                </p>
              </div>
              <div class="col-lg-5 col-md-6  col-sm-12 centrado">
                <img class="adapta" src="../Recursos/pk1.jpg">
              </div>
            </div>


          </div>


          <div id="item-1-2" class="my-5">

            <div class="row ">
              <h5>¿De Sony al Mcu?</h5>
              <div class="col-lg-5 col-md-6  col-sm-12 centrado ">

                <img class="adapta" src="../Recursos/pk2.jpg">
              </div>
              <div class="col-lg-7 col-md-5 p-2 ">


                <p> La transición de Spider-Man de Sony Pictures al Universo Cinematográfico de Marvel
                  (MCU) fue el resultado de una colaboración histórica entre Sony y Marvel Studios.
                  Inicialmente, Spider-Man estaba bajo la propiedad exclusiva de Sony, que produjo
                  varias películas del superhéroe, como la trilogía de Sam Raimi y las películas de
                  Marc Webb. Sin embargo, tras el lanzamiento de "The Amazing Spider-Man 2" en 2014 y
                  algunos desafíos creativos, Sony y Marvel Studios buscaron una nueva dirección para
                  el personaje.</p>
                <P> En 2015, ambas compañías anunciaron un acuerdo histórico que permitía a Spider-Man
                  unirse al MCU. Esto implicó que el actor Tom Holland interpretara a Peter
                  Parker/Spider-Man en las películas del MCU, comenzando con su cameo en "Captain
                  America: Civil War" (2016). Bajo este acuerdo, Sony continuó teniendo los derechos
                  de distribución y financiación de las películas independientes de Spider-Man,
                  mientras que Marvel Studios co-produjo las películas del personaje que formaron
                  parte del MCU. Esta colaboración resultó en el éxito de "Spider-Man: Homecoming"
                  (2017), "Far From Home" (2019), y "No Way Home" (2021), integrando al personaje de
                  manera orgánica en el universo más amplio de Marvel. La recepción positiva y el
                  impacto financiero de estas películas subrayan la exitosa convergencia de dos de los
                  mayores estudios de cine en la industria del entretenimiento.
                </P>

              </div>

            </div>




          </div>


          <div id="item-2" class="my-5">
            <div class="row">
              <h4>Homecoming</h4>
              <div class="col-lg-7 col-md-5 p-2 ">

                <p>"Spider-Man: Homecoming" sigue a un joven Peter Parker, interpretado por Tom Holland,
                  quien, después de su emocionante debut en "Captain America: Civil War", regresa a la
                  vida cotidiana de un estudiante de secundaria en Queens. Ansioso por demostrar su
                  valía como superhéroe, Peter espera una nueva misión de Tony Stark, mentor y figura
                  paterna, quien le aconseja ser paciente. Sin embargo, la paciencia se pone a prueba
                  cuando el temible criminal Adrian Toomes, alias El Buitre, emerge como una amenaza
                  en la ciudad de Nueva York.
                  <br>
                  El dilema de Peter se intensifica al descubrir la verdadera identidad de Toomes y su
                  conexión con Stark Industries. A medida que lucha con el equilibrio entre la vida
                  estudiantil y su deber como Spider-Man, se enfrenta a desafíos emocionales y
                  físicos. La película destaca el viaje de autodescubrimiento de Peter mientras lucha
                  contra El Buitre y sus secuaces, lo que lleva a confrontaciones impactantes y
                  revelaciones cruciales. "Spider-Man: Homecoming" no solo ofrece una emocionante
                  narrativa de superhéroes, sino que también explora el aspecto humano detrás de la
                  máscara, proporcionando una fresca y entrañable interpretación del icónico personaje
                  arácnido.
                </p>

              </div>
              <div class="col-lg-5 col-md-6  col-sm-12 centrado">
                <img class="adapta " src="../Recursos/pk3.jpg">
              </div>

            </div>





          </div>
          <div id="item-3" class="my-5">
            <div class="row">
              <h4>Far Frome Home</h4>
              <div class="col-lg-5 col-md-6  col-sm-12 centrado">
                <img class="adapta" src="../Recursos/pk4.jpeg">
              </div>
              <div class="col-lg-7 col-md-5 p-2 ">

                <p> "Spider-Man: Far From Home" continúa la historia de Peter Parker después de los
                  eventos de "Avengers: Endgame". Peter, interpretado por Tom Holland, busca un
                  merecido descanso durante un viaje escolar por Europa con sus compañeros. Sin
                  embargo, la tranquilidad se ve amenazada cuando Nick Fury recluta a Peter para
                  lidiar con misteriosos ataques de criaturas elementales que amenazan el mundo.
                  <br>
                  La trama se complica aún más con la llegada de Quentin Beck, también conocido como
                  Mysterio, interpretado por Jake Gyllenhaal, un supuesto héroe de una realidad
                  alternativa. Peter se encuentra atrapado entre su deseo de tener una vida normal y
                  su deber como superhéroe. La película explora temas de legado, confianza y la
                  responsabilidad de liderar, mientras Peter intenta discernir la verdad detrás de los
                  acontecimientos extraordinarios.
                  <br>
                  "Far From Home" no solo ofrece una emocionante narrativa de acción con
                  espectaculares efectos visuales, sino que también ahonda en el viaje emocional de
                  Peter Parker mientras enfrenta nuevos desafíos y descubre el costo de ser un héroe
                  en un mundo que nunca deja de sorprenderlo.
                </p>

              </div>

            </div>
          </div>




          <div id="item-4" class="my-5">
            <div class="row">
              <h4>No Way Home</h4>
              <div class="col-lg-7 col-md-5 p-2 ">


                <p>"Spider-Man: No Way Home" sigue a Peter Parker, interpretado por Tom Holland, después
                  de
                  que su identidad como Spider-Man es revelada al mundo. Enfrentando la creciente
                  presión
                  y el peligro para sus seres queridos, Peter busca la ayuda de Stephen Strange, el
                  Doctor
                  Strange, interpretado por Benedict Cumberbatch, para deshacer el hechizo que expuso
                  su
                  secreto.</p>

                <p>Sin embargo, algo sale mal durante el hechizo, desencadenando una realidad alterna en
                  la
                  que villanos de universos paralelos, enemigos clásicos de Spider-Man, se ven
                  liberados.
                  Peter se embarca en una misión junto a versiones alternativas de los Spider-Man
                  interpretados por Tobey Maguire y Andrew Garfield, para detener a los villanos y
                  restaurar el equilibrio en el multiverso.</p>

                <p>"No Way Home" es una épica aventura que no solo presenta una intensa acción y
                  momentos
                  emotivos, sino que también celebra la rica historia de Spider-Man en el cine al
                  reunir a
                  múltiples generaciones de actores que han dado vida al icónico personaje. La
                  película
                  explora temas de sacrificio, redención y la verdadera naturaleza de lo que significa
                  ser
                  un héroe.</p>
              </div>
              <div class="col-lg-5 col-md-6  col-sm-12 centrado">
                <img class="adapta" src="../Recursos/pk5.png">
              </div>
            </div>
          </div>
          <div id="item-4-1" class="my-5">

            <div class="row">
              <h5>Conexion al Sony Universe</h5>
              <div class="col-lg-5 col-md-6  col-sm-12 centrado">
                <img class="adapta" src="../Recursos/mc5.jpeg">
              </div>

              <div class="col-lg-7 col-md-5 p-2 ">





                <p>La conexión entre los tres universos de Spider-Man en el cine, representados por
                  Tobey
                  Maguire, Andrew Garfield y Tom Holland, es una manifestación única de la exploración
                  del
                  multiverso en "Spider-Man: No Way Home". La película abre un portal temporal que une
                  estas distintas líneas temporales, permitiendo que versiones alternativas de
                  Spider-Man
                  coexistan en la misma narrativa. Este evento trascendental no solo ofrece a los
                  fanáticos un festín visual al ver a estos icónicos actores compartiendo pantalla,
                  sino
                  que también explora la riqueza y diversidad de la mitología de Spider-Man en el
                  cine.
                </p>

                <p>La conexión entre los universos no solo se limita a los personajes principales, sino
                  que
                  se extiende a los villanos clásicos de cada línea temporal. Vemos la reaparición de
                  enemigos memorables como el Duende Verde, el Doctor Octopus y Electro, cada uno
                  proveniente de una realidad diferente. Esta interconexión proporciona un enfoque
                  nostálgico y reflexivo al abordar los elementos más queridos y emblemáticos de las
                  adaptaciones cinematográficas anteriores de Spider-Man.</p>

                <p>La película también aborda temas más profundos relacionados con la identidad y el
                  impacto
                  de las elecciones de los personajes en sus respectivos universos. La experiencia
                  compartida entre los tres Spider-Man se convierte en un catalizador para el
                  crecimiento
                  y la comprensión mutua, creando un vínculo único que trasciende las barreras del
                  tiempo
                  y el espacio. En conjunto, esta conexión entre los universos de Spider-Man en "No
                  Way
                  Home" ofrece a los espectadores una experiencia cinematográfica única y memorable.
                </p>
              </div>

            </div>


            <div id="item-4-2" class="my-5">

              <div class="row">
                <h5>Años Futuros</h5>
                <div class="col-lg-7 col-md-5 p-2 centrado ">
                  <p> Ek Spider-Man intepretado por Tom Holland seguira participando en los siguientes
                    eventos del MCU, preparandose para una segunda trilogia que abarcará sus años
                    universitarios. Adenas de su evidente participación en los Eventos de Secret
                    Wars y Kang Dinasty.</p>
                </div>
                <div class="col-lg-5 col-md-6  col-sm-12 centrado">
                  <img class="adapta" src="../Recursos/pk6.png">
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