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

  <title>Iron Man</title>
</head>

<body class="stark">

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
  <h1 class="text-center my-4"> IRON-MAN</h1>
  <hr>

  <!--Informacion con un pergamino-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-12 text-center centrado">
        <nav class="h-100 flex-column align-items-stretch border-end ">
          <nav class="nav nav-pills flex-column">

            <a class="nav-link enlaces" href="#item-1">Origen en el Comic</a>
            <a class="nav-link enlaces" href="#item-2">Salvando Marvel Studios</a>
            <nav class="nav nav-pills flex-column">
              <a class="nav-link ms-3 my-1 enlaces" href="#item-2-1"> El riesgo; Robert Downey Jr.</a>
              <a class="nav-link ms-3 my-1 enlaces" href="#item-2-2"> MCU; Un pilar del exito</a>
            </nav>
            <a class="nav-link enlaces" href="#item-3">Tony Stark a traves de una decada</a>

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
                  El personaje de Tony Stark, también conocido como Iron Man, hizo su primera
                  aparición en "Tales of Suspense" #39, que fue publicado por Marvel Comics en
                  marzo de 1963. Este cómic fue creado por Stan Lee, Larry Lieber, Don Heck y
                  Jack Kirby.
                  <br>
                  La historia presenta a Tony Stark, un industrial multimillonario y genio inventor,
                  quien es secuestrado y obligado a construir un arma de destrucción masiva. En cambio,
                  Stark utiliza su ingenio para construir una armadura avanzada que le permite escapar
                  y, finalmente, decide usar la tecnología para luchar contra el crimen como Iron Man.
                  <br>
                  A lo largo de los años, Iron Man se ha convertido en uno de los personajes más icónicos
                  de Marvel Comics y ha tenido numerosas series de cómics y adaptaciones en otros medios,
                  incluyendo el Universo Cinematográfico de Marvel (MCU), donde Robert Downey Jr.
                  interpretó el papel de Tony Stark/Iron Man


                </p>
              </div>
              <div class="col-lg-5 col-md-6  col-sm-12 centrado">
                <img class="adapta" src="../Recursos/ts1.png">
              </div>
            </div>

            <!--Salvando Marvel Studios-->
            <div id="item-4" class="my-5">
              <div class="row">
                <h4>Salvando Marvel Studios</h4>
                <div class="col-lg-7 col-md-6 col-sm-12 centrado">


                  <p>La introducción y éxito de Iron Man en el Universo Cinematográfico de Marvel (MCU)
                    tuvieron un impacto significativo en la franquicia y en la manera en que se abordaron
                    las adaptaciones de cómics en el cine.<br>

                    El lanzamiento del MCU con "Iron Man" (2008) fue la primera película del MCU. La decisión de
                    comenzar con Iron Man fue arriesgada en ese momento, ya que no era tan conocido como
                    algunos otros personajes de Marvel, pero resultó ser un gran éxito. La película
                    estableció el tono para el MCU y demostró que las películas basadas en personajes de
                    cómics podían ser serias, emocionantes y exitosas a nivel mundial.</P>

                </div>
                <div class="col-lg-5 col-md-6  col-sm-12 centrado">
                  <img class="paraimagenes" src="../Recursos/ts3.png">
                </div>
              </div>



            </div>
            <div id="item-2-1" class="my-5">

              <div class="row">
                <h4>El riesgo; Robert Downey Jr.</h4>
                <div class="col-lg-5 col-md-6  col-sm-12 centrado">
                  <img class="adapta" src="../Recursos/ts2.png">
                </div>
                <div class="col-lg-7 col-md-12 p-2  centrado">
                  <p>Cuando Robert Downey Jr. fue elegido para interpretar a Iron Man
                    en la película de 2008 del Universo Cinematográfico de Marvel
                    (MCU), hubo ciertos riesgos asociados con su elección debido a
                    su historial personal y legal. En la década de 1990 y principios
                    de la década de 2000, Downey Jr. enfrentó problemas legales relacionados
                    con el abuso de sustancias y varias detenciones.<br><br>

                    En el 2003, Downey Jr. fue arrestado por posesión de drogas y armas,
                    lo que llevó a períodos de rehabilitación y cárcel. Esto llevó a una
                    percepción negativa de su imagen pública, y muchas personas en la
                    industria del cine veían su contratación como un riesgo financiero
                    y de relaciones públicas. Los estudios a menudo son cautelosos al
                    elegir a actores que tienen problemas personales bien conocidos,
                    ya que estos problemas pueden afectar la producción de una película
                    y su éxito en taquilla.<br><br>

                    Sin embargo, la decisión de Marvel Studios de elegir a Robert Downey Jr.
                    para el papel resultó ser un gran acierto. Su actuación en "Iron Man"
                    recibió elogios tanto de la crítica como del público, y la película
                    fue un gran éxito comercial. Downey Jr. no solo revitalizó su carrera,
                    sino que también se convirtió en una figura central en el MCU,
                    desempeñando un papel crucial en el éxito continuado de la franquicia.
                    Su redención personal y profesional se ha convertido en una historia
                    destacada en la industria del entretenimiento.</p>
                </div>
              </div>


              <div id="item-2-2" class="my-5">
              
                  <h4 class="text-center my-5">MCU El Pilar del Exito</h4>
                  <div class="col-lg-12 col-md-12  col-sm-12 ">
                    <p>Iron Man demostró que las películas de superhéroes podían atraer tanto
                      a un público masivo como a críticos, consolidándose no solo en taquilla,
                      sino también entre los críticos. Esto proporcionó una base sólida para el
                      MCU y permitió que Marvel Studios continuara desarrollando su visión para
                      un universo cinematográfico cohesivo.<br><br>

                      El éxito de Iron Man no solo fue financiero, sino que también marcó un
                      cambio en la percepción cultural de las películas de superhéroes.
                      La película recibió elogios por la actuación de Robert Downey Jr. y por
                      su enfoque fresco y moderno del género. Este reconocimiento entre críticos
                      ayudó a desmitificar la idea de que las películas de superhéroes eran
                      simplemente entretenimiento de acción sin sustancia.<br><br>

                      Esto abrió la puerta para la aceptación generalizada y el crecimiento
                      exponencial del género de superhéroes en el cine. Ahora, las películas
                      de superhéroes eran vistas como obras respetables y capaces de ofrecer
                      no solo espectáculo visual, sino también historias convincentes y personajes
                      complejos.<br><br>

                      Así es como Iron Man se convirtió en el catalizador que lanzó el MCU y
                      estableció las bases para el éxito continuo de Marvel Studios.
                      Su influencia se ha sentido a lo largo de las fases subsiguientes del
                      MCU y en el enfoque general de las adaptaciones cinematográficas de cómics.</p>

                  </div>

                  <div class="col-lg-12 col-md-12  col-sm-12 centrado">
                    <img class="adapta" src="../Recursos/ts4.png">
                  </div>
                



              </div>

              <!--Cronologia-->
              <div id="item-3" class="my-5">
                <h5 class="text-center my-5">Tony Stark a traves de una decada</h5>
                <div class="row ">
                  <div class="col-12  col-md-6 col-xl-3 my-3 ">
                    <div class="card tarjeta_info" >
                      <img src="../Recursos/pts1.png" class="card-img-top paraimagenes" alt="...">
                      <div class="card-body">
                        <p class="card-text">1. Iron Man (2008):
                          La primera película de Iron Man establece el origen del personaje.
                          Tony Stark, un exitoso industrial y genio inventor, es secuestrado
                          por un grupo terrorista. En lugar de construir un arma destructiva,
                          crea la primera versión de la armadura de Iron Man y escapa..
                        </p>
                      </div>
                    </div>

                  </div>
                  <div class="col-12 col-md-6 col-xl-3 my-3" >
                    <div class="card tarjeta_info" >
                      <img src="../Recursos/pts2.png" class="card-img-top paraimagenes" >
                      <div class="card-body">
                        <p class="card-text">2. Iron Man 2 (2010):
                          La secuela explora la relación de Stark con su padre y la amenaza
                          de la enfermedad que está afectando su salud. También introduce la
                          idea de que la tecnología de la armadura de Iron Man está afectando
                          su cuerpo, estableciendo temas futuros en la trama.
                        </p>
                      </div>
                    </div>

                  </div>
                  <div class="col-12 col-md-6 col-xl-3 my-3">
                    <div class="card tarjeta_info" >
                      <img src="../Recursos/pts3.png" class="card-img-top paraimagenes" alt="...">
                      <div class="card-body">
                        <p class="card-text">3. The Avengers (2012):
                          Stark se une a otros superhéroes para formar los Vengadores y
                          enfrentarse a la amenaza de Loki y los Chitauri. Este evento
                          solidifica su papel como líder y héroe en el equipo
                        </p>
                      </div>
                    </div>

                  </div>
                  <div class="col-12 col-md-6 col-xl-3 my-3">
                    <div class="card tarjeta_info" >
                      <img src="../Recursos/pts4.png" class="card-img-top paraimagenes" alt="...">
                      <div class="card-body">
                        <p class="card-text">4. Iron Man 3 (2013):
                          Después de los eventos de "The Avengers", Stark lucha con el
                          estrés postraumático y enfrenta a un nuevo enemigo, el Mandarín.
                          La película aborda la vulnerabilidad de Stark y su deseo de proteger
                          a las personas que ama.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row ">
                  <div class="col-12  col-md-6 col-xl-3 my-3">
                    <div class="card tarjeta_info" >
                      <img src="../Recursos/pts5.png" class="card-img-top paraimagenes" alt="...">
                      <div class="card-body">
                        <p class="card-text">5. Avengers: Age of Ultron (2015):
                          Stark es uno de los creadores de Ultron, un programa de
                          inteligencia artificial destinado a proteger a la humanidad.
                          Sin embargo, las cosas salen mal, y Ultron se convierte en
                          una amenaza. Stark se enfrenta a la responsabilidad y las
                          consecuencias de sus acciones.

                        </p>
                      </div>
                    </div>

                  </div>
                  <div class="col-12 col-md-6 col-xl-3 my-3">
                    <div class="card tarjeta_info" >
                      <img src="../Recursos/pts6.png" class="card-img-top paraimagenes" alt="...">
                      <div class="card-body">
                        <p class="card-text">6. Captain America: Civil War (2016):
                          Stark está en desacuerdo con Steve Rogers (Capitán América)
                          sobre el registro de superhéroes. Esta división lleva a la
                          creación del equipo de los Vengadores Secretos y a conflictos
                          personales y emocionales.

                        </p>
                      </div>
                    </div>

                  </div>
                  <div class="col-12 col-md-6 col-xl-3 my-3">
                    <div class="card tarjeta_info" >
                      <img src="../Recursos/pts7.png" class="card-img-top paraimagenes" alt="...">
                      <div class="card-body">
                        <p class="card-text">7. Spider-Man: Homecoming (2017) y Avengers:
                          Infinity War (2018): Stark actúa como mentor de Peter
                          Parker (Spider-Man). En "Infinity War", enfrenta la amenaza
                          de Thanos y sufrirá pérdidas personales significativas.

                        </p>
                      </div>
                    </div>

                  </div>
                  <div class="col-12 col-md-6 col-xl-3 my-3">
                    <div class="card tarjeta_info" >
                      <img src="../Recursos/pts8.png" class="card-img-top paraimagenes" alt="...">
                      <div class="card-body">
                        <p class="card-text">8. Avengers: Endgame (2019):
                          Stark juega un papel crucial en los eventos finales para
                          revertir las acciones de Thanos y salvar al universo. Este
                          arco culmina en un sacrificio heroico que tiene un impacto
                          emocional y significativo en la trama general del MCU.

                        </p>
                      </div>
                    </div>
                  </div>
                </div>



              </div> <!--fin del item 3-->

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

  </footer>


</body>

</html>