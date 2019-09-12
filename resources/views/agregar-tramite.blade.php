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

    <form action="" class="form">
      <div class="form-header">
          <h1 class="form-titulo"><span>Agregar trámite</span></h1>
      </div>
      <div>
        <label for="nombre" class="form-label">Nombre del archivo:</label>
        <input id="title" type="text" class="form-input @error('title') is-invalid @enderror"  name="title" placeholder="Nombre " value="{{ old('title') }}" autofocus required>
        @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="formLog" id="title">

        <label for="nombre" class="form-label">Agregar descripción:</label>

        <textarea id="description" class="form-textarea @error('description') is-invalid @enderror"  name="description" placeholder="Tu descripción va aqui " value="{{ old('description') }}" autofocus required></textarea>
           @error ('description')

            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="formLog" id="municipio" style="width:100%">

         A cuál municipio pertenece?:
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
    <br>
    <input type="submit" class="btn-submit" value="Guardar">
    </form>

  </div>
@endsection
