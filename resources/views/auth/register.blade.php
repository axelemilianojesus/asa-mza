<?php
$name ="";
$lastName ="";
$userName ="";
$date ="";
$prov ="";
$email ="";
$phone ="";



$provincias=[
  "BA"=>"Buenos Aires",
  "CA"=>"Catamarca",
  "CH"=>"Chaco",
  "CT"=>"Chubut",
  "CB"=>"Cordoba",
  "ER"=>"Entre Rios",
  "JY"=>"Formosa",
  "LP"=>"La Pampa",
  "LR"=>"La Rioja",
  "MZ"=>"Mendoza",
  "MI"=>"Misiones",
  "RN"=>"Rio Negro"
];

require_once("funciones.php");

if(estaLogueado()){
  // header("location:inicio.php");exit;
  header("location:inicio.php");exit;
}

if($_POST){


  // mantenemos los datos en caso de error
//     persistencia($_POST);

        $name =$_POST["name"];
        $lastName =$_POST["lastName"];
        $userName =$_POST["userName"];
        $date =$_POST["date"];
        $prov =$_POST["prov"];
        $email =$_POST["email"];
        $phone =$_POST["phone"];
        // $avatar =$_POST["avatar"];


$existeMail = existeElEmail($_POST["email"]);

if ($existeMail == false) {

  $errores=validarRegistracion($_POST);

  if(count($errores)== 0){
   $usuario=armarUsuario($_POST);
   //guarda usuario

   guardarUsuario($usuario);

   // loguear usuario
   loguear($_POST["email"]);


   // header("location:inicio.php");exit;
   header("location:inicio.php");exit;
  }
} else {
       $errores["email"] = "El mail que ingresaste ya está registrado";

}



}

?>

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
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/faviconasa.ico">
    <title>Registro</title>
</head>

<body class="forms" id="registro">
    <div class="menu">
        <?php include_once ("header.php") ?>
    </div>

    <section class="registro m-0 py-5">
        <div class="container bg-white p-4" id="registro">

            <form class="registro" action=action="{{ route('register') }}" method="post" enctype="multipart/form-data">
              @csrf
                <h1 class="forms"> Registrate</h1>
                <div class="errores">
                    <ul>
                        <?php if (isset($errores)): ?>
                        OOPS! algo salió mal:
                        <?php foreach ($errores as $error): ?>
                        <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                        Por favor verificá los datos y volvé a intentarlo.
                        <?php endif; ?>

                    </ul>
                </div>
                <div class="formLog" id="name">
                    <p class="info">Colocá tu nombre</p>
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" id="name" placeholder="Nombre " value="{{ old('name') }}" autofocus required>
                </div>
                <div class="formLog" id="lastName">
                    <p class="info">Colocá tu apellido</p>
                    <i class="fas fa-user"></i>
                    <input type="text" name="lastName" placeholder=" Apellido " value="{{ old('lastName') }}" autofocus required>
                </div>
                <div class="formLog" id="userName">
                    <p class="info">Tu usuario debe contener al menos 6 caracteres</p>
                    <i class="fas fa-user"></i>
                    <input type="text" name="userName" placeholder=" Elija un nombre de Usuario " value="{{ old('userName') }}" autofocus required>
                </div>
                <div class="formLog" id="fechaDeNac">
                    <p class="info">Ingresá tu fecha de nacimiento</p>
                    <i class="fas fa-birthday-cake"></i>
                    <input type="date" name="date" id="date" value="{{ old('date') }}" autofocus required>
                </div>
                <div class="formLog" id="provDeNac" style="width:100%">

                    <i class="fab fa-font-awesome-flag"></i> Provincia de Nacimiento:
                    <!--                    <input type="text" name="name" placeholder=" prov de nacimiento " autofocus required>-->
                    <select class="formLog" name="prov" id="prov">
                          // CREAR EL FOREACH CON JS
                        <?php foreach ($provincias as $codigo => $provincia): ?>

                        <!-- // aqui necesita tener persistencia el prov elegido -->

                        <option value="<?php echo $codigo; ?>"> <?php echo $provincia; ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="formLog" id="email">
                    <p class="info">Ingresá tu correo electrónico</p>
                    <i class="fas fa-at"></i>
                    <input type="email" name="email" placeholder="ejemplo@correo.com" value="{{ old('email') }}" autofocus required>
                </div>


                <div class="formLog" id="password">
                    <p class="info">Tu contraseña debe contener: mayúsculas, minúsculas y números</p>
                    <i class="fas fa-key"></i>
                    <input type="password" name="password" placeholder="Ingresá tu contraseña" autofocus required>
                </div>
                <div class="formLog" id="password">
                    <p class="info">Tu contraseña debe contener: mayúsculas, minúsculas y numeros</p>
                    <i class="fas fa-key"></i>
                    <input type="password" name="password1" placeholder="Repite tu contraseña" autofocus required>
                </div>

                <div class="formLog" id="phone">
                    <p class="info"> Recordá colocar tu número sin el 0 y sin en 15</p>
                    <i class="fas fa-phone"></i>
                    <input type="tel" name="phone" pattern="[0-9]{10}" placeholder="Ingresa tu teléfono" value="{{ old('phone') }}" autofocus required>
                </div>

                <div class="formLog" id="avatar">
                    <p class="info">Podés elegir tu avatar</p>
                    <i class="fas fa-image" id="avatar"></i>
                    <input class="file" type="file" name="avatar" value="{{ old('avatar') }}">
                </div>

                <button class="form" type="submit" name="button">Registrarme</button>
                <div class="formLog" id="recordar">

                    <p class="formLog">Al ingresar aceptas nuestras políticas de uso.</p><br>

                    <p class="formLog">Si ya tienes un usuario <a class="formLog" href="login.php">presiona aquí</a></p>

                </div>

            </form>


        </div>
    </section>
    <footer>
        <?php include_once("footer.php") ?>
    </footer>
</body>

</html>
