@extends('layouts.plantilla')
@section('css')
<link rel="stylesheet" href="../../css/styleTramitesMuni.css">
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
       {{-- <section class="seccionesmuni"> --}}
         @foreach ($tramites as $tramite)
           <ul>
             <section class="seccionesmuni">
             <li>
               <p><a href="/tramites/{{$tramite->id}}">{{$tramite->title}}</a></p>
               <p>aca descarga el archivo</p>
               {{-- @if (Auth::user()->level === 1) --}}

                 <button type="button" class="btn btn-secondary">Modificar</button>
                 <button type="button" class="btn btn-danger">Eliminar</button>
                 <button type="button" class="btn btn-secondary">
                 <a href="/agregar-tramite">Agregar tramite</a></button>
               {{-- @endif --}}
             </li>
           </ul>
           @endforeach
         </section>
     </div>
 </div>
@endsection
