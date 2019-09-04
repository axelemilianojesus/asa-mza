
@extends('layouts.plantilla')

<?php


$provincias=[
  "BA"=>"Buenos Aires",
  "CA"=>"Catamarca",
  "CH"=>"Chaco",
  "CT"=>"Chubut",
  "CB"=>"Cordoba",
  "CR"=>"Corrientes",
  "ER"=>"Entre Rios",
  "FO"=>"Formosa",
  "JY"=>"Jujuy",
  "LP"=>"La Pampa",
  "LR"=>"La Rioja",
  "MZ"=>"Mendoza",
  "MI"=>"Misiones",
  "NQ"=>"Neuquen",
  "RN"=>"Rio Negro",
  "SA"=>"Salta",
  "SJ"=>"San Juan",
  "SL"=>"San Luis",
  "SF"=>"Santa Fe",
  "SE"=>"Santiago del Estero",
  "TF"=>"Tierra del fuego",
  "TU"=>"Tucuman"
];

 ?>
@section('css')
  <link rel="stylesheet" href="css/stylesForms.css">
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
                    {{-- <ul>
                        @if(isset($errores))
                        OOPS! algo salió mal:
                          @foreach ($errores as $error)
                            <li> {{($error)}} </li>
                          @endforeach
                        Por favor verificá los datos y volvé a intentarlo.
                        @endif

                    </ul>
                </div> --}}
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
                <div class="formLog" id="userName">
                    <p class="info">Tu usuario debe contener al menos 6 caracteres</p>
                    <i class="fas fa-user"></i>
                    <input class=" @error('userName') is-invalid @enderror" type="text" name="userName" placeholder=" Elija un nombre de Usuario " value="{{ old('userName') }}" autofocus required>
                    @error('userName')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="formLog" id="fechaDeNac">
                    <p class="info">Ingresá tu fecha de nacimiento</p>
                    <i class="fas fa-birthday-cake"></i>
                    <input class=" @error('date') is-invalid @enderror"  type="date" name="date" value="{{ old('date') }}" autofocus required>
                    @error('date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="formLog" id="provDeNac" style="width:100%">

                    <i class="fab fa-font-awesome-flag"></i> Provincia de Nacimiento:
                    <select class="formLog  @error('provincia') is-invalid @enderror"  name="provincia" id="prov">

                        @foreach ($provincias as $codigo => $provincia)

                        <!-- // aqui necesita tener persistencia el prov elegido -->

                        <option value= "{{($codigo)}}" >{{($provincia)}}</option>
                       @endforeach>
                    </select>
                    @error('provincia')
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

                <div class="formLog" id="phone">
                    <p class="info"> Recordá colocar tu número sin el 0 y sin en 15</p>
                    <i class="fas fa-phone"></i>
                    <input class=" @error('phone') is-invalid @enderror"  type="tel" name="phone" pattern="[0-9]{10}" placeholder="Ingresa tu teléfono" value="{{ old('phone') }}" autofocus required>
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
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

                    {{-- <p class="formLog">Al ingresar aceptás nuestras políticas de uso.</p><br> --}}

                    <p class="formLog">Si ya tienes un usuario <a class="formLog" href="/login">presiona aquí</a></p>

                </div>

            </form>


        </div>
@endsection
