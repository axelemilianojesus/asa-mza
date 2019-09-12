@extends('layouts.plantilla')

@section('css')
  <link rel="stylesheet" href="../../css/stylesForms.css">
@endsection

@section('title')
  Registro
@endsection

@section('main')

<body class="forms" id="login">
<section class="registro m-0 py-5">
    <div class="container bg-white p-4">
        <form class="registro" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
            <h1 class="form text-center">Registrate</h1>
                <div class="formLog" id="name">
                        <p class="info">Coloca tu nombre</p>
                            <i class="fas fa-user"></i>
                            <input id="name" type="text"  class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                </div>
                <div class="formLog" id="lastName">
                    <p class="info">Coloca tu apellido</p>
                    <i class="fas fa-user"></i>
                    <input id="lastname" type="text" class=" @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus placeholder="Apellido">

                    @error('lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="formLog" id="email">
                    <p class="info">Ingresa tu correo electrónico</p>
                        <i class="fas fa-at"></i>
                        <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="ejemplo@correo.com">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="formLog" id="password">
                        <p class="info">TU contraseña debe contener: mayúsculas, minúsculas y números</p>
                        <i class="fas fa-key"></i>
                        <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" placeholder="Ingresa tu contraseña" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="formLog" id="password">
                        <p class="info">Repite tu contraseña</p>
                        <i class="fas fa-key"></i>
                        <input id="password-confirm" type="password" class="" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="formLog" id="phone">
                            <p class="info">Agrega el teléfono</p>
                            <i class="fas fa-phone"></i>
                            <input id="phone" type="text" class=" @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="261 XXX XXXX">

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <button class="form" type="submit" name="button">
                        {{ __('Registrarme') }}
                    </button>

                    <div class="formLog">

                    <p class="formLog">Si ya tenés un usuario <a class="formLog" href="/login"> presioná aquí</a> </p>
                </div>
            </form>
        </div>
</body>
    @endsection



{{--









<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Lastname') }}</label>

                            <div class="col-md-6">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
