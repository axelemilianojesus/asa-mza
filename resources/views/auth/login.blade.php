@extends('layouts.app')
@extends('layouts.plantilla')

@section('content')
<?php
$email="";
//session_start();
require_once("./../app/Http/Controllers/funciones.php");

if (estaLogueado()) {

  // header ("location:inicio.php");exit;
  header ("location:/welcome");exit;
}

if ($_POST) {
  $email=$_POST["email"];
  $errores = validarLogin($_POST);

  if (count($errores) == 0) {
    loguear($_POST["email"]);
    // header("location:inicio.php");exit;
    header("location:/login"); exit;

  } else {
    foreach ($errores as $error) {
      // echo $error . "<br>";
      if ($error == "Usuario no registrado") { //este if nos lleva al registro.php para crear un nuevo usuario

        // header("location:registro.php");exit;
        header("location:
        /register");exit;

      }
      }
    }

}
 ?>
@section('main')


<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Pragma" content="no-cache">

    <!-- HOJAS DE STILOS-->

    <link rel="stylesheet" href="css/stylesForms.css">


    <!--FUENTES E ICONOS-->


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link rel="shortcut icon" href="img/faviconasa.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>INGRESAR AL SITIO</title>
</head>

<body class="forms" id="login">



    <section class="login m-0 py-5">


        <div class="container bg-white p-4">

            <h1 class="forms">Bienvenido a</h1>
            <img class="logo" src="img/asalogo.png" alt="">

            <form class="login" action="{{ route('login') }}" method="post">
              @csrf
                <h1 class="forms">Ingresar</h1>

                    <div class="errores">
                        <ul>
                            @if (isset($errores))
                            OOPS! algo salió mal:
                            @foreach ($errores as $error): ?>
                            <li>{{ $error }}</li>
                            @endforeach
                            Por favor verificá los datos y volvé a intentarlo.
                          @endif



                        </ul>
                    </div>
                    <div class="formLog" id="email">
                        <p class="info">Ingresá tu correo electrónico</p>
                        <i class="fas fa-at"></i>
                        <input type="email" name="email" placeholder="ejemplo@correo.com" value="{{old( 'email' )}}" autofocus required>
                    </div>

                    <div class="formLog" id="password">
                        <p class="info">Ingresá tu contraseña</p>
                        <i class="fas fa-key"></i>
                        <input type="password" name="password" placeholder="Ingresá tu contraseña" autofocus required>
                    </div>

                    <button class="form" type="submit" name="button">{{ __('Entrar') }}</button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Olvidé mi contraseña!') }}
                        </a>
                    @endif

                    <div class="formLog" id="recordar">

                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                          <label class="form-check-label" for="remember">
                              {{ __('Recuerdame') }}
                          </label>
                      </div>

                        <p class="formLog">Al ingresar aceptas nuestras políticas de uso.</p><br>

                        <p class="formLog">Si todavía no estás registrado <a href="/register" class="formLog">presiona aquí</a></p>

                    </div>

            </form>


        </div>
    </section>
@endsection
