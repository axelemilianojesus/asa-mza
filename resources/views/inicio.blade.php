@extends('layouts.plantilla')
@section('css')
 <link rel="stylesheet" href="../../css/style-header.css">

@endsection


@section('title')
Inicio
@endsection


@section('main')

<section id="slider">


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
                        <a class="btn" href="/municipalidades">Ver mas »</a>
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
</section>

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

            <div class="col-md-6 proyectos">
                <h2 class="bg-orange color-white">TRAMITES ONLINE</h2>
                <p>
                    Podés acceder desde aca al Colegio de Arquitectos  <br> o a la Caja previsional.
                </p>
                <p>
                    <a class="btn" href="/tramites/tramites-online">Ver mas »</a>
                </p>
            </div>


            <div class="col-md-6 nosotros">
                <h2 class="bg-black color-white">NOTICIAS</h2>
                <p>
                    Enterate de las ultimas novedades. Mirá las ultimas noticias.
                </p>
                <p>
                    <a class="btn" href="#">Ver mas »</a>
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
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection
