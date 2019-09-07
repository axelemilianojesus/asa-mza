@extends('layouts.plantilla')
@section('css')
 <link rel="stylesheet" href="../../css/stylesMuni.css">

@endsection


@section('title')
Municipalidades
@endsection


@section('main')
  <div class="muni">
    <div class="banner-standard bg-muni mb-0">
        <h2 class="banner-texto-standard"><span>MUNICIPALIDADES</span></h2>
    </div>
      <div class="secciones max-width bg-image py-5">

        @foreach ($munis as $muni)

          <section class="seccionesmuni">
            <button class="boton" type="submit" name="{{$muni->name}}">
              <h2><a href="/municipalidades/{{$muni->id}}">{{$muni->name}}</a></h2>
            </button>

          </section>

        @endforeach


      </div>

  </div>
@endsection
