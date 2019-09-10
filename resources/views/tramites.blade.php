@extends('layouts.plantilla')
@section('css')
 <link rel="stylesheet" href="../../css/stylesMuni.css">

@endsection


@section('title')
Tramites de {{$munis->name}}

@endsection


@section('main')
  <div class="muni">
    <div class="banner-standard bg-muni mb-0">
        <h2 class="banner-texto-standard"><span>TRAMITES {{$munis->name}}</span></h2>
        </div>
      <div class="secciones max-width bg-image py-5">
        @foreach ($tramites as $tramite)
          <section class="seccionesmuni">


            <ul>
              <li>
                <p><a href="/tramites/{{$tramite->id}}">{{$tramite->title}}</a></p>
                <i class="far fa-file-pdf">Descargar el archivo</i>
                {{-- @if (Auth::user()->level === 1) --}}
                <li>
                  <button type="button" name="button">Modificar</button>
                  <button type="button" name="button">Eliminar</button>
                  <button type="button" name="button"><a href="/tramites/agregar-tramite"> Agregar trámite<a/></button>
                </li>
                {{-- @endif --}}
              </li>
            </ul>


          </section>
          @endforeach
      </div>
  </div>
@endsection
