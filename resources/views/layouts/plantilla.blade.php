<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148376301-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-148376301-1');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Personal CSS -->

    <link rel="stylesheet" href="../../css/app.css">
    <link rel="stylesheet" href="../../css/style-header.css">
    <link rel="stylesheet" href="../../css/stylefooter.css">
    @yield('css')

    <!--Icono -->
    <link rel="shortcut icon" href="img/faviconasa.ico">

    <!--FontAwesome -->
    <script src="https://kit.fontawesome.com/7907a05fb3.js"></script>
    @yield('js')

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
                    {{-- <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search"> --}}
                    {{-- <button class="btn my-2 my-sm-0" type="submit">
                    <i class="fas fa-search fa-lg"></i></button> --}}
                </form>
                <div>
                    @if (Auth::check())
                    <label class="usuario">
                        ¡Hola <b>{{Auth::user()->name}}</b>!
                        {{-- <img src="storage/{{Auth::user()->avatar}}" alt="" width="40px" border-radius=50%> --}}
                    </label>
                    @endif
                </div>
                <div class="ml-auto p-2 bd-highlight"><a href="#"><i class="fab fa-facebook-f"></i></a></div>
                <div class="ml-auto p-2 bd-highlight"><a href="#"><i class="fab fa-twitter"></i></a></div>
                <div class="ml-auto p-2 bd-highlight"><a href="#"><i class="fab fa-instagram"></i></a></div>
                <div class="ml-auto p-2 bd-highlight"><a href="#"><i class="fab fa-skype"></i></a></div>
                <br>

            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom-orange">
            <a class="navbar-brand" href="/"><img src="img/asalogo.png" alt="asa" width="100px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-0">
                    @if (Auth::check())
                    {{-- @if (Auth::user()->level === 1) --}}

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Administración
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/admin" style=color:white>Panel de Control</a>
                            <a class="dropdown-item" href="/agregar-tramite" style=color:white>Agregar trámites</a>
                            <a class="dropdown-item" href="#" style=color:white>Agregar Trámites on-line</a>
                            <a class="dropdown-item" href="#" style=color:white>Agregar Capacitación</a>
                        </div>
                    </li>
                    {{-- @endif --}}
                    @endif

                    <li class="nav-item active">
                        <a class="nav-link" "capa-destacado" href="/capacitaciones">Capacitaciones<span class="sr-only">(current)</span></a>
                    </li>

                    {{-- <li class="nav-item">
                      <a class="nav-link" href="/working">Proyectos</a>
                  </li> --}}

                    <li class="nav-item">
                        <a class="nav-link" href="/tramites-online">Tramites Online</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/nosotros">Nosotros</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/municipalidades">Municipalidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/preguntasfrecuentes">F.A.Qs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contactos">Contáctenos</a>
                    </li>


                    <!-- aqui si el usuario esta loguado va a aparecer mi perfil y cerrar sesion -->

                    @if (Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Mi Perfil
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/perfil" style=color:white>Mi perfil</a>
                            <a class="dropdown-item" style=color:#E27F41 href="{{ route('logout') }}" onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                {{ __('Cerrar Sesión') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Ingresar</a>
                    </li>
                    @endif


                </ul>

            </div>
        </nav>
    </header>

    <main>
        @yield('main')
    </main>


    <footer>

        <div class="footer-container">
            <div class="footer-main">
                <div class="footer-columna">
                    <h3 class="font-weight-bolder">Suscríbete</h3>
                    <input type="email" placeholder="Escriba su Correo">
                    <input type="submit" value=" Suscribirse" class="boton-orange w-100">
                </div>
                <div class="footer-columna" style="margin: auto;">
                    <h3 class="font-weight-bolder">Contactos</h3>
                    <span class="d-flex"><i class="fas fa-map-marker-alt mr-2"></i>
                        <p>244 Lorem ipsum dolor sit amet</p>
                    </span>
                    <span class="d-flex"><i class="fas fa-phone mr-2"></i>
                        <p>(+54) 261 669 7897</p>
                    </span>
                    <span class="d-flex"><i class="fas fa-envelope mr-2"></i>
                        <p>info@asamendoza.org</p>
                    </span>
                </div>
                <div class="footer-columna">
                    <h3 class="font-weight-bolder">Nosotros</h3>
                    <p class="nosotros font-weight-light text-left" style="font-size:small">La Asociación Solidaria de Arquitectos se está gestando como una Asociación Civil sin fines de lucro, en donde los profesionales puedan compartir de forma
                        genuina, la búsqueda de objetivos comunes en un espacio colaborativo</p>
                </div>
            </div>
        </div>
        <div class="footer-copy-redes">
            <div class="main-copy-redes">
                <div class="footer-copy">
                    <p>Diseñado y programado por <b>thebigtable.com</b></p>
                </div>
                <div class="footer-redes">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-skype"></i></a>
                </div>
            </div>
        </div>
        <div class="cm-up" id="cm-up">
            <input type="button" class="cm-text-up" value="Arriba">
            <span class="cm-icon">
                <i class="fas fa-chevron-up"></i>
            </span>
            <script src="js/fontawesome-all.min.js"></script>
            <script src="js/jquery-3.3.1.min.js"></script>
            <script src="js/up.js"></script>
        </div>
    </footer>


</body>

</html>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/up.js"></script>
