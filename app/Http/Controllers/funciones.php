<?php

session_start();


function validarRegistracion($datos){
  // global $errores;
  // global $clave;
   $errores=[];

    if (($_POST["name"]==null) && ($_POST["email"]==null)) {
      $errores=["error1"=>"Debe completar campos de nombre y email"];

    }
    if (($_POST["name"]==null) || strlen($_POST["name"]) < 3) {
      $errores=["error2"=>"Debe completar nombre con al menos 3 caracteres"];
    }
    if (($_POST["lastName"]==null) || strlen($_POST["lastName"]) < 3)  {
      $errores=["error2-1"=>"Debe completar nombre con al menos 3 caracteres"];
    }
    if (($_POST["userName"]==null) || strlen($_POST["userName"]) < 6)  {
      $errores=["error2-3"=>"Debe completar nombre DE USUARIO con al menos 6 caracteres"];
    }
    if (($_POST["date"]==null)) {
      $errores=["error2-4"=>"Debe ingresar un formato de fecha válido"];
    }
    if (($_POST["pais"]==null)) {
      $errores=["error2-5"=>"Debe colocar un país válido"];

    }
    if ($_POST["email"]==null) {
      $errores=["error3" =>"Faltó completar mail"];

    }
    if (($_POST["phone"]==null)) {
      $errores=["error6"=>"Debe ingresar un formato válido"];

    }
    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)==false){
    $errores=["error4"=>"Formato de email incorrecto"];


    }
    if (($_POST["password"] ==null) || ($_POST["password1"]==null)){
      $errores=["error5"=>"Uno de los campos de las contraseñas esta vacio"];

    }elseif (($_POST["password"] == $_POST["password1"])) {
        $clave=$_POST["password"];

        $errores = validar_clave($clave,$errores);
        // llamar_errores($errores);

        $hash = password_hash($_POST["password"],PASSWORD_DEFAULT);
        // $errores=["error0"];
        // echo "=>ACA VA EL GUARDAR";

        // exit;

        // mepa que tendria q haber un exit para q siga en la linea 28 de registro.php

        // if(count($errores)==0){
        //   $usuario=armarUsuario($_POST);
        //   //guarda usuario
        //   guardarUsuario($usuario);
        //
        //   // header("location:inicio.php");exit;
        //   header("location:inicio-axel.php");exit;
        // }

    }else {
        // Entra en ese else si en el front se logro burlar el sistema
      $errores=["error6"=>"no coinciden campos"];
      foreach ($errores as $error=> $valor) {
        if ($errores=="error0") {
          echo "Bienvenido";
          //Aca va a guardar el usuario
          if(count($errores)==0){
            $usuario=armarUsuario($_POST);
            //guarda usuario
            guardarUsuario($usuario);

            // header("location:inicio.php");exit;
            // header("location:inicio-axel.php");exit;
          }
        }else {
          return $errores;
        }
      }
    }
    return $errores;
    //header("Location:https://digitalhouse.com");

  //}
}
function validar_clave($clave,$errores){
  // global $errores;
  // global $clave;

  $clave=$_POST["password"];


  if (($_POST["password"] == $_POST["password1"])) {
    if(strlen($clave) < 6){
      $errores=["error51"=> "La clave debe tener al menos 6 caracteres"];

    }
    if(strlen($clave) > 10){
      $errores=["error52"=> "La clave no puede tener más de 10 caracteres"];

    }
    if (!preg_match('`[a-z]`',$clave)){
      $errores=["error53"=> "La clave debe tener al menos una letra minúscula"];

    }
    if (!preg_match('`[A-Z]`',$clave)){
      $errores=["error54"=> "La clave debe tener al menos una letra mayúscula"];

    }
    if (!preg_match('`[0-9]`',$clave)){
      $errores=["error55"=> "La clave debe tener al menos un caracter numérico"];
   }

 }

    return $errores;
}




 //
 // FUNCIONES PARA VALIDAR LOGIN
 //

function validarLogin($datos){
  if (!existeElEmail($datos["email"])) {
    $errores["email"]="Usuario no registrado"; // aqui crea un "error" q en login nos va a permitir ingresar al sistema

  }
  else {
    $usuario = traerUsuarioPorEmail($datos["email"]);

    if (password_verify($datos["password"], $usuario["password"])== false) {
      $errores["email"] = "Las contraseñas no coinciden";
    }
  }
  return $errores;
}

function existeElEmail($email){
  $usuario = traerUsuarioPorEmail($email);
  if ($usuario == null) {
    return false;
  } else {

    return true;
  }
}

function traerUsuarioPorEmail($email) {
  $usuarios = traerTodosLosUsuarios();

  foreach ($usuarios as $usuario) {
    if ($usuario["email"] == $email) {
      return $usuario;
    }
  }

  return null;
}

function loguear($email) {
  $_SESSION["usuarioLogueado"] = $email;
}

//
// FUNCIONES PARA GUARDAR LOS DATOS DE REGISTRO.PHP
//

function armarUsuario($datos) {
  return [
    "id" => proximoId(),
    "name" => ucfirst($datos["name"]),
    "lastName" => ucfirst($datos["lastName"]),
    "userName" => ucfirst($datos["userName"]),
    "date" => $datos["date"],
    "pais" => ucfirst($datos["pais"]),
    "email" => $datos["email"],
    "password" => password_hash($datos["password"], PASSWORD_DEFAULT),
    "phone" => $datos["phone"],
    "avatar" => $datos["avatar"]
  ];
}
function proximoId() {
  $usuarios = traerTodosLosUsuarios();

  if (count($usuarios) == 0) {
    return 1;
  }

  $ultimoUsuario = end($usuarios);

  return $ultimoUsuario["id"] + 1;
}

function traerTodosLosUsuarios() {
  $archivo = file_get_contents("usuarios.json");

  if ($archivo == "") {
    return [];
  }

  $usuarios = json_decode($archivo, true);

  return $usuarios;
}

function guardarUsuario($usuario) {
  $usuarios = traerTodosLosUsuarios();

  $usuarios[] = $usuario;

  $usuariosJSON = json_encode($usuarios);

  file_put_contents("usuarios.json", $usuariosJSON);
}

//
// FUNCION PARA SABER SI ESTA LOGUEADO
//

function estaLogueado() {
  if (isset($_SESSION["usuarioLogueado"])) {
    return true;
  }
  else {
    return false;
  }
}

function traerUsuarioLogueado() {
  if (estaLogueado()) {
    return traerUsuarioPorEmail($_SESSION["usuarioLogueado"]);
  }

  return null;
}
function persistencia($datos) {
  return [
    "name" => ucfirst($datos["name"]),
    "lastName" => ucfirst($datos["lastName"]),
    "userName" => ucfirst($datos["userName"]),
    "date" => $datos["date"],
    "pais" => ucfirst($datos["pais"]),
    "email" => $datos["email"],
    "phone" => $datos["phone"],
    "avatar" => $datos["avatar"]
  ];
}

 ?>
