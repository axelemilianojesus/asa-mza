@extends('layouts.plantilla')
@section('css')
 <link rel="stylesheet" href="../../css/stylesMuni.css">

@endsection


@section('title')
Tramites de {{$muni->name}}

@endsection


@section('main')
  <div class="muni">
    <div class="banner-standard bg-muni mb-0">
        <h2 class="banner-texto-standard"><span>TRAMITES {{$muni->name}}</span></h2>
        </div>
      <div class="secciones max-width bg-image py-5">
        <section class="seccionesmuni">

          @foreach ($tramites as $tramite)
            <ul>
              <li>
                <p><a href="/tramites/{{$tramite->id}}">{{$tramite->title}}</a></p>
                <p>aca descarga el archivo</p>
                {{-- @if (Auth::user()->level === 1) --}}
                  <button type="button" name="button">Modificar</button>
                  <button type="button" name="button">Eliminar</button>
                  <button type="button" name="button"><a href="/tramites/agregar-tramite"> Agregar trámite<a/></button>
                {{-- @endif --}}
              </li>
            </ul>

            @endforeach
          </section>

      </div>
  </div>
@endsection
