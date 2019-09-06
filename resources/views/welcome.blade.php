<?php
require_once("./../app/Http/Controllers/funciones.php");

$usuarioLogueado = traerUsuarioLogueado();

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <title>Inicio</title> -->

    <!-- la idea es comprobar si trae el usuario y lo muestro en el title-->
    <?php if ($usuarioLogueado != null) : ?>
    <title>Bienvenido <?php echo $usuarioLogueado["name"]?></title>
    <?php else: ?>
    <title>Bienvenido Invitado</title>
    <?php endif; ?>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Personal CSS -->
    <link rel="stylesheet" href="css/style-header.css">
    <!--Icono -->
    <link rel="shortcut icon" href="img/faviconasa.ico">
    <!--FontAwesome -->
    <script src="https://kit.fontawesome.com/7907a05fb3.js"></script>

</head>

<body>
    <header>
      <div class="row bg-orange w-100 col-12 barra-sup montserrat m-0">
        <div class="d-flex ml-auto">
          <!--/* Capacitaciones */
          <div class="nav-item">
              <a class="nav-link" href="capacitacion.php"><i class="fa-shopping-cart-lg">  CAPACITACIONES</i></a>
          </div> -->

          <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
              <button class="btn my-2 my-sm-0" type="submit">
                  <!--<img src="img/header/asa-finder.png" alt="asa-finder" width="20px">--><i class="fas fa-search fa-lg"></i></button>
          </form>

            <div class="ml-auto p-2 bd-highlight"><a href="#"><i class="fab fa-facebook-f"></i></a></div>
            <div class="ml-auto p-2 bd-highlight"><a href="#"><i class="fab fa-twitter"></i></a></div>
            <div class="ml-auto p-2 bd-highlight"><a href="#"><i class="fab fa-instagram"></i></a></div>
            <div class="ml-auto p-2 bd-highlight"><a href="#"><i class="fab fa-skype"></i></a></div>

        </div>
      </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom-orange">
            <a class="navbar-brand" href="inicio.php"><img src="img/asalogo.png" alt="asa" width="100px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-0">
                    <!--<li class="nav-item active">
                        <a class="nav-link" href="inicio.php">Inicio <span class="sr-only">(current)</span></a>
                    </li> -->

                    <li class="nav-item active">
                        <a class="nav-link" "capa-destacado" href="capacitacion.php">Capacitaciones<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="working.php">Proyectos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Servicios
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="servicios.php">Servicios 1</a>
                            <a class="dropdown-item" href="working.php">Servicios 2</a>
                            <!--<div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>-->
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/nosotros">Nosotros</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="municipalidades.php">Municipalidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/preguntasFrecuentes">F.A.Qs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contáctenos</a>
                    </li>


    <!-- aqui si el usuario esta loguado va a aparecer mi perfil y cerrar sesion -->
                    <?php if ($usuarioLogueado != null) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Mi Perfil
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="perfil.php">Mi perfil</a>
                            <a class="dropdown-item" href="logout.php">Cerrar sesión</a>
                        </div>
                    </li>
                  <?php else: ?>
                  <li class="nav-item">
                    <a class="nav-link" href="/login">Ingresar</a>
                    <?php endif; ?>
                    <!-- aqui cierra el if de usuario logueado -->

                </ul>

            </div>
        </nav>

    </header>
    <div class="slider">
      <div class="bd-example position-relative bg-dark">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active m-x-auto centered-img">
          <img src="img/slider/slider-.jpg" class="d-block contain" alt="...">
          <div class="carousel-caption d-md-block montserrat centered">
            <h5 class="content-orange">ASOCIACION SOLIDARIA DE ARQUITECTOS</h5>
            <p>Construimos la casa... tú la conviertes en tu hogar.</p>
          </div>
        </div>

        <div class="carousel-item m-x-auto centered-img">
          <img src="img/slider/slider-2.jpg" class="d-block contain" alt="...">
          <div class="carousel-caption d-md-block montserrat centered">
            <h5 class="content-orange">CAPACITACIONES</h5>
            <p>Porque sabemos que es importante estar siempre capacitado, es que ofrecemos este espacio para que puedas invertir en tu futuro. Mirá los cursos que A.S.A Mendoza tiene para ofrecerte.</p>
              <a class="btn" href="capacitacion.php">Ver mas »</a>
          </div>
        </div>

        <div class="carousel-item m-x-auto centered-img">
          <img src="img/slider/slider-3.jpg" class="d-block contain" alt="...">
          <div class="carousel-caption d-md-block montserrat centered">
            <h5 class="content-orange">MUNICIPALIDADES</h5>
            <p>Accedé a la guía completa de tramites por municipios. Además podés descargar toda la documentación necesaria desde aquí.</p>
              <a class="btn" href="municipalidades.php">Ver mas »</a>
          </div>
        </div>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
    </div>


    <!--_____________________SECCIONES NAVEGABLES-->

    <div class="inicio">

      <div class="container-fluid jumbotron pb-0 mb-0">
	<div class="row montserrat text-center font-small">
		<div class="col-md-6 capacitacion">
		<h2 class="bg-orange color-white">CAPACITACIONES</h2>
			<p>
				Porque nos interesa tu futuro, y queremos ayudarte a crecer. <br> Conocé los cursos que tenemos para ofrecerte
			</p>
			<p>
				<a class="btn" href="capacitacion.php">Ver mas »</a>
			</p>
		</div>


		<div class="col-md-6 muni">
			<h2 class="bg-black color-white">MUNICIPALIDADES</h2>
			<p>
			Accedé a la guía completa de trámites por Municipalidades. <br> Además encontrarás un organigrama para ayudarte a completar los trámites
			</p>
			<p>
				<a class="btn" href="municipalidades.php">Ver mas »</a>
			</p>
		</div>
	<div class="col-md-6 proyectos">
    <h2 class="bg-orange color-white">PROYECTOS</h2>
			<p>
				Estamos en constante movimiento. Conocé mas sobre nuestros proyectos. <br> También podés sumarte a nuestros proyectos.
			</p>
			<p>
				<a class="btn" href="#">Ver mas »</a>
			</p>
		</div>


		<div class="col-md-6 nosotros">
			<h2 class="bg-black color-white">NOSOTROS</h2>
			<p>
			  Somos una organización sin fines de lucro. Conocémos un poco mas.
			</p>
			<p>
				<a class="btn" href="quienes%20somos.php">Ver mas »</a>
			</p>
		</div>




	</div>
</div>


    </div>
    <!--_____________________SECCIONES ESTATICAS-->
    <section class="d-flex align-content-center flex-wrap container-fluid w-100 text-white bg-black p-3 m-auto align-items-center">
        <h2 class="m-auto"><span class="color-orange">2x1</span> en cursos!!!</h2>
    </section>

    <section class="d-flex container-fluid w-100 text-white bg-dark p-3 m-auto align-items-center">
        <div class="m-auto col-12 col-md-6">
            <img src="img/tarjetas.png" width="100%" alt="tarjetas">
        </div>
    </section>

    <section class="col-12 col-md-12 text-white bg-dark">

    </section>

    <footer>
      {{-- ("footer.php") --}}
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/up.js"></script>
</body>

</html>
