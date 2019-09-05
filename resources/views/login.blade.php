<?php
$email="";
//session_start();
require_once("funciones.php");

if (estaLogueado()) {

  header ("location:inicio.php");exit;
}

if ($_POST) {
  $email=$_POST["email"];
  $errores = validarLogin($_POST);

  if (count($errores) == 0) {
    loguear($_POST["email"]);
    header("location:inicio.php");exit;
    // header("location:login.php"); exit;

  } else {
    foreach ($errores as $error) {
      // echo $error . "<br>";
      if ($error == "Usuario no registrado") { //este if nos lleva al registro.php para crear un nuevo usuario

        header("location:registro.php");exit;

      }
      }
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
    <link rel="shortcut icon" href="img/faviconasa.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
 {{-- <title>INGRESAR AL SITIO</title>
    @section('title')
        Aca va el titulo
    @endsection --}}

</head>

<body class="forms" id="login">

    <div class="menu">
        <?php include_once ("header.php") ?>
    </div>

    <section class="login m-0 py-5">


        <div class="container bg-white p-4">

            <h1 class="forms">Bienvenido a</h1>
            <img class="logo" src="img/asalogo.png" alt="">

            <form class="login" action="login.php" method="post">
                <h1 class="forms">Ingresar</h1>

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
                    <div class="formLog" id="email">
                        <p class="info">Ingresá tu correo electrónico</p>
                        <i class="fas fa-at"></i>
                        <input type="email" name="email" placeholder="ejemplo@correo.com" value="<?= $email; ?>" autofocus required>
                    </div>

                    <div class="formLog" id="password">
                        <p class="info">Ingresá tu contraseña</p>
                        <i class="fas fa-key"></i>
                        <input type="password" name="password" placeholder="Ingresá tu contraseña" autofocus required>
                    </div>

                    <button class="form" type="submit" name="button">Entrar</button>

                    <div class="formLog" id="recordar">

                        <input type="checkbox" class="chkbx"> Recuerdame. <br>

                        <p class="formLog">Al ingresar aceptas nuestras políticas de uso.</p><br>

                        <p class="formLog">Si todavía no estás registrado <a href="registro.php" class="formLog">presiona aquí</a></p>

                    </div>

            </form>


        </div>
    </section>

    <footer>
        <?php include_once("footer.php") ?>
    </footer>

</body>

</html>
