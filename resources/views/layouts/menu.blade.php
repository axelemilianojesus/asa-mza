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
    <!--NO CACHEAR-->
    <meta http-equiv="pragma" content="no-cache" />
    <title>Header</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--FontAwesome -->
    <script src="https://kit.fontawesome.com/7907a05fb3.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Personal CSS -->
    <link rel="stylesheet" href="css/style-header.css">


</head>

<body>
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
                    <a class="nav-link" href="quienes%20somos.php" tabindex="-1">Nosotros</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="municipalidades.php">Municipalidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="preguntasFrecuentes.php">F.A.Qs</a>
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
                <a class="nav-link" href="login.php">Ingresar</a>
                <?php endif; ?>
                <!-- aqui cierra el if de usuario logueado -->

            </ul>

        </div>
    </nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
