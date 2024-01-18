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

  <title>THOR</title>
</head>

<body class="thor">

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
  <h1 class="text-center my-4"> THOR</h1>
  <hr>

  <!--Informacion con un pergamino-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-12 text-center centrado">
        <nav class="h-100 flex-column align-items-stretch border-end ">
          <nav class="nav nav-pills flex-column">

            <a class="nav-link enlaces" href="#item-1">Origen en el Comic</a>
            <a class="nav-link enlaces" href="#item-2">Thor el dios del trueno</a>
            <nav class="nav nav-pills flex-column">
              <a class="nav-link ms-3 my-1 enlaces" href="#item-2-1"> De digno a no digno</a>
              <a class="nav-link ms-3 my-1 enlaces" href="#item-2-2"> Años futuros </a>
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
                  El personaje de Thor hizo su primera aparición en el cómic "Journey into Mystery"
                  #83, que fue publicado en agosto de 1962 por Marvel Comics. Thor fue creado por
                  el escritor Stan Lee, el guionista Larry Lieber y el dibujante Jack Kirby.
                  <br>
                  En este cómic, el Dr. Donald Blake, un médico cojo, encuentra un bastón encantado en
                  Noruega mientras está de vacaciones. Al golpear el bastón en el suelo, se transforma
                  en Thor, el dios del trueno nórdico. Esta transformación revela su verdadera identidad
                  como Thor, y el cómic sigue sus aventuras mientras combate a amenazas mitológicas y
                  villanos modernos
                  <br>
                  La serie original de Thor se desarrolló en "Journey into Mystery" y posteriormente se
                  convirtió en "Thor" en el número 126 de la serie. Thor ha sido un personaje clave en el
                  universo de Marvel Comics desde entonces, con numerosas historias, arcos argumentales
                  y eventos que han explorado su mitología, sus relaciones y su papel en el mundo
                  superheroico de Marvel.


                </p>
              </div>
              <div class="col-lg-5 col-md-6  col-sm-12 centrado">
                <img class="adapta" src="../Recursos/thor1.png">
              </div>
            </div>

            <!--Salvando Marvel Studios-->
            <div id="item-2" class="my-5">
              <div class="row">
                <h4 class="my-5 text-center">El dios del trueno, de no digno a digno</h4>
                <div class="col-lg-12 col-md-12 p-2 ">


                  <p>En la película "Thor" (2011), dirigida por Kenneth Branagh, hay una parte de la
                    trama en la que Thor se vuelve "no digno" de levantar Mjolnir. Este evento es un
                    elemento crucial en el desarrollo del personaje.</p>
                  <p>En la historia, Thor es desterrado de Asgard y enviado a la Tierra como castigo por su arrogancia
                    y beligerancia. Odin, su padre, encierra Mjolnir en un campo mágico y coloca un encantamiento en
                    el martillo que solo permite que aquellos que sean dignos lo levanten. Thor, inicialmente,
                    no es capaz de levantar Mjolnir después de su destierro, lo que representa su pérdida de
                    dignidad y poder divino.</p>

                  <p>A lo largo de la película, Thor pasa por un arco de redención y aprendizaje de la humildad.
                    Finalmente, al demostrar un cambio genuino en su carácter y al estar dispuesto a sacrificarse
                    por los demás, Thor se vuelve digno una vez más y puede levantar Mjolnir.</p>

                  <p>Este evento en la película "Thor" es un antecedente importante para el personaje en e
                    l MCU y establece el concepto de dignidad y mérito asociado con el levantamiento de Mjolnir.
                    En "Avengers: Endgame", cuando Thor vuelve a levantar Mjolnir, es un momento significativo
                    porque valida su redención continua y su desarrollo como héroe.</p>


                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12  col-sm-12 centrado">
                  <img class="paraimagenes" src="../Recursos/thor2.png">
                </div>
              </div>
            </div>
            <div id="item-2-1" class="my-5">

              <div class="row">
                <h4 class="my-5"> Jane Foster</h4>
                <div class="col-lg-5 col-md-6  col-sm-12 centrado">
                  <img class="adapta" src="../Recursos/thor3.png">
                </div>
                <div class="col-lg-7 col-md-12 p-2  centrado">
                  <p>En el MCU, Natalie Portman interpretó a Jane Foster, y la relación con Thor,
                    interpretado por Chris Hemsworth, fue un elemento importante en las primeras
                    películas de Thor. En "Thor" (2011), Thor conoce a Jane cuando es desterrado
                    a la Tierra. La relación se desarrolla a lo largo de la película, pero al final,
                    Thor regresa a Asgard.
                    <br>
                    En "Thor: The Dark World" (2013), Jane Foster se ve envuelta en eventos relacionados
                    con la Aether, una de las Gemas del Infinito. Thor regresa a la Tierra para
                    protegerla y, en el proceso, reaviva su relación.
                    <br>
                    Sin embargo, en "Avengers: Age of Ultron" (2015) y "Thor: Ragnarok" (2017),
                    se sugiere que la relación de Thor y Jane puede haber terminado. Sin embargo,
                    para la cuarta entrega del personaje, “Thor: Love and Thunder” tiene su regres
                    o como la nueva diosa del trueno, dado que se vuelve digna al tomar el martillo,
                    sin embargo, esta enferma de cancer y aunque recuepera su relación con Thor,
                    muere al final de la película.
                  </p>
                </div>
              </div>


              <div id="item-2-2" class="my-5">
                <div class="row">
                  <h4 class="my-5 text-center">Años futuros</h4>
                  <div class="col-lg-12 col-md-12  col-sm-12 ">
                    <p>Recordando que, al final de la película de “Thor: amor y trueno”
                      se mostró la muerte de Jane Foster y la unión de Thor con su nueva
                      compañera de armas (la hija del asesino de dioses) se verán inmersos
                      en un sinnúmero de nuevas aventuras, muchas de ellas muy peligrosas,
                      una de las cuales será la pelea contra uno de los semidioses favoritos
                      de muchas personas: Hércules, esto se sabe gracias a las escenas post
                      créditos que se mostraron en la película .</p>


                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12 col-md-12  col-sm-12 centrado">
                    <img class="paraimagenes" src="../Recursos/thor4.png">
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