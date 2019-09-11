@extends('layouts.plantilla')

@section('css')
<link rel="stylesheet" href="../../css/stylesForms.css">
@endsection

@section('title')
Perfil de Usuario
@endsection

@section('main')

<section class="perfil m-0 py-5">
    <div class="container bg-white p-4" id="perfil">
        <form class="perfil" action="perfil.php">
            <h1 class="forms"> Perfil de usuario</h1>

            <div class="formLog" id="avatar">
                <i class="fas fa-image" id="avatar"></i>

            </div>

            <div class="formLog" id="name">
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder=" Nombre " autofocus required>
            </div>
            <div class="formLog" id="lastName">
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder=" Apellido " autofocus required>
            </div>
            {{-- <div class="formLog" id="userName">
                  <i class="fas fa-user"></i>
                  <input type="text" name="name" placeholder=" Nombre de Usuario " autofocus required> --}}

            {{-- <div class="formLog" id="fechaDeNac">
        <i class="fas fa-birthday-cake"></i>
        <input type="date" name="name" placeholder=" Fecha de Nacimiento DD/MM/AAAA " autofocus required>
    </div> --}}
            {{-- <div class="formLog" id="provDeNac">
                  <i class="fab fa-font-awesome-flag"></i>
                  <input type="text" name="name" placeholder=" Provincia de nacimiento " autofocus required>
              </div> --}}

            <div class="formLog" id="email">
                <i class="fas fa-at"></i>
                <input type="email" name="email" placeholder="ejemplo@correo.com" autofocus required>
            </div>


            <div class="formLog" id="phone">
                <i class="fas fa-phone"></i>
                <input type="tel" name="phone" pattern="[0-9]{10}" placeholder="Código de área sin el 0, sin el 15" autofocus required>
            </div>
            <div class="formLog" id="admin">
                <i class="fas fa-user-tie"></i>
                <label class="admin" for="">USER ADMIN O NO</label>
            </div>
            <div class="formLog" id="permiso">
                Desea darle permiso de administrador? <br>
                <input type="radio" class="chkbx" name="admin" value="1" checked>SI
                <input type="radio" class="chkbx" name="admin" value="0">NO
            </div>

            <div class="formLog" id="button">
                <!-- BUSCAR OTRO -->
                <button class="perfil" type="submit" name="button"><i class="fas fa-search-plus" id="perfil"></i></button>
                <!-- ACTUALIZAR DATOS -->
                <button class="perfil" type="submit" name="button"><i class="fas fa-sync-alt" id="perfil"></i></button>

                <!--ELIMINAR USUARIO -->
                <button class="perfil" type="submit" name="button"><i class="fas fa-user-minus" id="perfil"></i></button>
                <!-- AGREGAR USUARIO -->
                <button class="perfil" type="submit" name="button"><i class="fas fa-user-plus" id="perfil"></i></button>
            </div>

        </form>
    </div>
</section>
@endsection
