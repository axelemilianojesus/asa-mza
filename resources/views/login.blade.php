
@extends('layouts.plantilla')

@section('css')
  <link rel="stylesheet" href="../../css/stylesForms.css">
@endsection

@section('title')
  Ingresar al Sitio
@endsection

@section('main')

<body class="forms" id="login">



    <section class="login m-0 py-5">


        <div class="container bg-white p-4">

            <h1 class="text-center">Bienvenido a</h1>
            <img class="logo" src="img/asalogo.png" alt="">

            <form class="login" action="{{ route('login') }}" method="post">
              @csrf
                <h1 class="text-center">Ingresar</h1>


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
