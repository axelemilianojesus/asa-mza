@extends('layouts.plantilla')
@section('css')
 <link rel="stylesheet" href="../../css/stylecontacto.css">

@endsection


@section('title')
Contactos
@endsection


@section('main')
  <div class="contenedormayor">
      <div class="banner-standard bg-contacto">
          <h2 class="banner-texto-standard titulos-naranja "><span>¡CONTÁCTENOS!</span></h2>
      </div>
      <div class="containergral max-width">
          <div class="contenedor-iconos bg-light py-4">
              <ion-icon name="pin"></ion-icon>

              <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9476.244620415422!2d-68.85932236713496!3d-32.888690753885164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967e09e08865d9f7%3A0x6a62c1f49ef33549!2sDigital+House+-+Mendoza!5e0!3m2!1ses!2sar!4v1561680038177!5m2!1ses!2sar" width="320" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
              <p class="datoscont"><a href="https://goo.gl/maps/RhpVv5v7DMfCKzZh9" target="_blank"> DUARDO Arquitectos SL / P. de la Catellana 79, Madrid 28046.</a></p>
             <a href=123-456-7890>(+34) 947 002 963</a>

              <br>
              <a class="datoscont" href="mailto:asa.mendozaunidos@gmail.com">asa.mendozaunidos@gmail.com</a>
              <div class="iconosredes">
                  <div class="redes">
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fab fa-skype"></i></a>
                  </div>
              </div>
          </div>
          <div class="contenedorcontacto">
              <form action="" class="form">
                  <div class="form-header">
                      <h1 class="form-titulo"><span>Contacto</span></h1>
                  </div>
                  <label for="nombre" class="form-label">Nombre:</label>
                  <input type="text" id="nombre" class="form-input" placeholder="Escriba su nombre">

                  <label for="apellido" class="form-label">Apellido:</label>
                  <input type="text" id="apellido" class="form-input" placeholder="Escriba su apellido">

                  <label for="correo" class="form-label">Correo electronico:</label>
                  <input type="email" id="correo" class="form-input" placeholder="Escriba su email">

                  <label for="mensaje" class="form-label">Mensaje:</label>
                  <textarea id="mensaje" class="form-textarea" placeholder="Aqui escriba su mensaje"></textarea>

                  <input type="submit" class="btn-submit" value="Enviar Consulta">
              </form>
          </div>
      </div>
    </div>
      <script src="js/fontawesome-all.min.js"></script>
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/up.js"></script>

@endsection
