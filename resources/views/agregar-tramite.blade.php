@extends('layouts.plantilla')
@section('css')
 <link rel="stylesheet" href="../../css/stylesMuni.css">

@endsection


@section('title')
Agregar trámites
@endsection


@section('main')
  <div class="muni">

    <div class="formLog" id="title">
        <p class="info">Titulo del archivo</p>

        <input id="title" type="text" class=" @error('title') is-invalid @enderror"  name="title" placeholder="Nombre " value="{{ old('title') }}" autofocus required>
        @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="formLog" id="title">
        <p class="info">Agregale una descipción</p>

        <input id="description" type="textarea" class=" @error('description') is-invalid @enderror"  name="description" placeholder="Tu descripción va aqui " value="{{ old('description') }}" autofocus required>
        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="formLog" id="municipio" style="width:100%">

        <i class="fab fa-font-awesome-flag"></i> A cuál municipio pertenece?:
        <select class="formLog  @error('municipio') is-invalid @enderror"  name="municipio" id="municipio">

            @foreach ($munis as $muni)

              <option value= "{{$muni->id}}" >{{$muni->name}}</option>
           @endforeach>
        </select>
        @error('municipio')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="formLog" id="file">
        <p class="info">Seleccioná el archivo que vas a subir</p>

        <input id="file" class="file @error('file') is-invalid @enderror" type="file" name="avatar" value= "{{ old('file') }}">
        @error('avatar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

  </div>
@endsection
