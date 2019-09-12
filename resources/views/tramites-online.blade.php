@extends('layouts.plantilla')
@section('css')
 <link rel="stylesheet" href="../../css/style-header.css">


@endsection


@section('title')
Trámites online
@endsection


@section('main')
  <div class="inicio">
    <div class="max-width">
      <div class="banner-standard bg-ss">
          <h2 class="banner-texto-standard titulos-naranja"><span>TRÁMITES ONLINE</span></h2>
      </div>
      <div class="container-fluid jumbotron pb-0 mb-0">
          <div class="row montserrat text-center font-small">
              <div class="col-md-6 capacitacion">
                  <h2 class="bg-orange color-white">COLEGIO DE ARQUITECTOS</h2>

                  <p> <a class="btn" href="http://camza.org.ar/tramites-online/" target="_blank">Trámites Online</a>
                  </p>
                  <p> <a class="btn" href="http://camza.org.ar/leyes-y-honorarios/" target="_blank">Leyes y Honorarios</a>
                  </p>
                  <p> <a class="btn" href="http://camza.org.ar/novedades/" target="_blank">Noticias</a>
                  </p>
              </div>


              <div class="col-md-6 muni">
                  <h2 class="bg-black color-white">CAJA DE PREVISON</h2>
                  <p> <a class="btn" href="http://cajaprevisionmza.com.ar/" target="_blank">Página Principal</a>
                  </p>
                  <p> <a class="btn" href="http://www.cajaprevisionaporte.com.ar/" target="_blank">Cálculos de aportes</a>
                  </p>

              </div>


          </div>
      </div>


  </div>

@endsection
