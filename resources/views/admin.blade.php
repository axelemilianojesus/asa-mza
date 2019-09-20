@extends('layouts.plantilla')
@section('css')
<link rel="stylesheet" href="../../css/style-header.css">

@endsection


@section('title')
Administración
@endsection


@section('main')
<div class="inicio">
    <div class="banner-standard bg-admin">
        <h2 class="banner-texto-standard titulos-naranja"><span>ADMINISTRACION</span></h2>
    </div>

    <div class="container-fluid jumbotron pb-0 mb-0">
        <div class="row montserrat text-center font-small">
            <div class="col-md-6 capacitacion">
                <h2 class="bg-orange color-white">CAPACITACIONES</h2>
                <p>
                    Gestioná las capacitaciones desde aqui
                </p>
                <p>
                    <a class="btn" href="/capacitaciones">Acceder</a>
                </p>
            </div>


            <div class="col-md-6 muni">
                <h2 class="bg-black color-white">MUNICIPALIDADES</h2>
                <p>
                    Gestioná los trámites de las municipalidades
                </p>
                <p>
                    <a class="btn" href="/agregar-tramite">Acceder</a>
                </p>
            </div>

            <div class="col-md-6 muni">
                <h2 class="bg-orange color-white">USUARIOS</h2>
                <p>
                    Gestioná los permisos de usuarios desde aqui
                </p>
                <p>
                    <a class="btn" href="/perfil">Acceder</a>
                </p>
            </div>


            <div class="col-md-6 muni">
                <h2 class="bg-black color-white">PROYECTOS</h2>
                <p>
                    Gestioná los proyectos de ASAMZA desde acá.
                </p>
                <p>
                    <a class="btn" href="/working">Acceder</a>
                </p>
            </div>

        </div>
    </div>
</div>
@endsection
