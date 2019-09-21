@extends('layouts.plantilla')

@section('css')
<link rel="stylesheet" href="../../css/styleTramitesMuni.css">
@endsection

@section('title')
Trámites de {{$munis->name}}
@endsection

@section('js')
<script type="text/javascript" src="../../js/tramites.js">

</script>
@endsection

@section('main')
<div class="muni">

    <div class="banner-standard bg-muni mb-0">
        <h2 class="banner-texto-standard titulos-naranja"><span>TRAMITES DE {{$munis->name}}</span></h2>
    </div>
    <div class="secciones max-width bg-image py-5">
        {{-- <section class="seccionesmuni"> --}}
        @foreach ($tramites as $tramite)
        <ul>
            <section class="seccionesmuni">
                <li>
                    {{-- <p><a href="/tramites/{{$tramite->id}}">{{$tramite->title}}</a></p> --}}

                    <p>
                        <a href="../storage/app/public/{{$tramite->file}}" download="{{$tramite->title}}">
                            {{$tramite->title}}
                        </a>

                    </p>
                    <p>{{$tramite->description}}</p>

                    @if (Auth::check())

                    @if (auth()->user()->email =='javier@correo.com')


                    <div class="checked">


                        <button type="button" class="btn btn-secondary">Modificar</button>
                        <form class="" action="/tramites/eliminar" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$tramite->id}}">
                            <button type="submit" class="btn btn-danger" onclick="deleletconfig()">Eliminar</button>
                        </form>

                    </div>
                    @endif
                    @endif
                </li>
        </ul>
        @endforeach
        </section>
    </div>
</div>
@endsection
