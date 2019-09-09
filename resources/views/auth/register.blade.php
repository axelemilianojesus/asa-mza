@extends('layouts.plantilla')

@section('css')
  <link rel="stylesheet" href="../../css/stylesForms.css">
@endsection

@section('title')
  Registro
@endsection

@section('main')
  <section class="registro m-0 py-5" >
      <div class="container bg-white p-4" id="registro">

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
              <h1 class="forms"> Registrate</h1>
                <div class="errores">
                  <div class="formLog" id="name">
                      <p class="info">Colocá tu nombre</p>
                      <i class="fas fa-user"></i>
                      <input class=" @error('name') is-invalid @enderror" type="text" name="name" placeholder="Nombre " value="{{ old('name') }}" autofocus required>
                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="formLog" id="lastName">
                      <p class="info">Colocá tu apellido</p>
                      <i class="fas fa-user"></i>
                      <input class=" @error('lastName') is-invalid @enderror" type="text" name="lastName" placeholder=" Apellido " value="{{ old('lastName') }}" autofocus required>
                      @error('lastName')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
            
                  <div class="formLog" id="email">
                      <p class="info">Ingresá tu correo electrónico</p>
                      <i class="fas fa-at"></i>
                      <input class=" @error('email') is-invalid @enderror"  type="email" name="email" placeholder="ejemplo@correo.com" value="{{ old('email') }}" autofocus required>
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="formLog" id="password">
                      <p class="info">Tu contraseña debe contener: mayúsculas, minúsculas y números</p>
                      <i class="fas fa-key"></i>
                      <input class=" @error('password') is-invalid @enderror"  type="password" name="password" placeholder="Ingresá tu contraseña" autofocus required>
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="formLog" id="password">
                      <p class="info">Tu contraseña debe contener: mayúsculas, minúsculas y numeros</p>
                      <i class="fas fa-key"></i>
                      <input type="password" name="password1" placeholder="Repite tu contraseña" autofocus required>
                  </div>
                  <div class="formLog" id="avatar">
                      <p class="info">Podés elegir tu avatar</p>
                      <i class="fas fa-image" id="avatar"></i>
                      <input class="file @error('avatar') is-invalid @enderror" type="file" name="avatar" value= "{{ old('file') }}">
                      @error('avatar')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <button class="form" type="submit" name="button">{{ __('Registrarme') }}</button>
                  <div class="formLog" id="recordar">
                    <p class="formLog">Si ya tienes un usuario <a class="formLog" href="/login">presiona aquí</a></p>

                </div>

            </form>


        </div>
@endsection
