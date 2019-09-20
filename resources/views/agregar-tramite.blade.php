@extends('layouts.plantilla')
@section('css')
{{-- <link rel="stylesheet" href="../../css/styleTramites.css"> --}}
<link rel="stylesheet" href="../../css/stylecontacto.css">
@endsection


@section('title')
Agregar trámites
@endsection


@section('main')
<div class="contenedorcontacto">

    <form action="/agregar-tramite" class="form" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="form-header">
            <h1 class="form-titulo"><span>Agregar trámite</span></h1>
        </div>
        <div>
            <label for="nombre" class="form-label">Nombre del archivo:</label>
            <input id="title" type="text" class="form-input @error('title') is-invalid @enderror" name="title" placeholder="Nombre " value="{{ old('title') }}" autofocus required>
            @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="formLog" id="title">

            <label for="nombre" class="form-label">Agregar descripción:</label>

            <textarea id="description" class="form-textarea @error('description') is-invalid @enderror" name="description" placeholder="Tu descripción va aqui " value="{{ old('description') }}" autofocus required></textarea>
            @error ('description')

            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="formLog" id="municipio" style="width:100%">

            A cuál municipio pertenece?:
            <select class="formLog  @error('muni') is-invalid @enderror" name="muni" id="muni">

            @foreach ($munis as $muni)

            <option value="{{$muni->id}}"{{$muni->id == old('muni') ? "selected": ""}}>{{$muni->name}}</option>
            @endforeach>
                </select>
                @error('municipio')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
        <div class="formLog" id="file">
            <p class="info"><br>Seleccioná el archivo que vas a subir. <br> <b>El archivo no debe superar los 5Mb de tamaño </b></p>

            <input id="file" class="file @error('file') is-invalid @enderror" type="file" name="file" value= "{{ old('file') }}">
            @error('avatar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <br>
        {{-- <input type="submit" class="btn-submit" value="Guardar"> --}}
        <button class="btn btn-secondary" type="submit" name="button">
            {{ __('Guardar') }}
        </button>
        <button class="btn btn-secondary" type="reset" name="button">
            {{ __('Limpiar Campos') }}
        </button>

    </form>

</div>
@endsection
