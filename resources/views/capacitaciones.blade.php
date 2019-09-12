@extends('layouts.plantilla')
@section('css')
<link rel="stylesheet" href="../../css/stylesCapa.css">

@endsection


@section('title')
Capacitaciones
@endsection


@section('main')
  <div class="titulo banner-standard bg-capacitaciones">

      <h1 class="capacitacion banner-texto-standard"> CAPACITACIONES</h1>
</div>
<div class="container " id="capacitacion">


  <div class="span subtitulo">
      <span class="capacitacion">Porque sabemos que es importante estar siempre capacitado, es que ofrecemos este espacio para que puedas invertir en tu futuro. Mirá los cursos que A.S.A Mendoza tiene para ofrecerte. <br>
        Pasá el mousse sobre la imagen para obtener más información.</span>
  </div>



    <section class="productos">

        <div class="product">

            <div class="imgBx">

                <img class="product" src="img/products/prod-01.jpeg" alt="">
            </div>

            <div class="contenido">

                <h2>Título</h2>
                <p> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <a href="/carrito" id="comprar">Comprar ahora</a>
                <a href="#" id="ampliar">Agrandar imagen</a>
                <!-- <a href="#"id="contenido">Agregar al carrito</a> NO ENTIENDO LA DIFERENCIA ENTRE COMPRAR Y AGREGAR -->
            </div>

        </div>

    </section>

    <section class="productos">

        <div class="product">

            <div class="imgBx">

                <img class="product" src="img/products/prod-01.jpeg" alt="">
            </div>

            <div class="contenido">

                <h2>Título</h2>
                <p> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <a href="/carrito" id="comprar">Comprar ahora</a>
                <a href="#" id="ampliar">Agrandar imagen</a>
                <!-- <a href="#"id="contenido">Agregar al carrito</a> NO ENTIENDO LA DIFERENCIA ENTRE COMPRAR Y AGREGAR -->
            </div>

        </div>


    </section>

    <section>
      <hr>
      <div class="cards">
          <img class="cards" src="img/pagos.png">
      </div>
      <hr>
      <div class="consultas">
          <p><b>Tenés alguna consulta? </b> <i>Comunicate ahora con nuestros operadores y te ayudaran: <b> 261-669 7897 </b></i></p>
      </div>
    </section>

    <section class="prod-relacionados">
        <div class="titulo">
            <h3 id="blanco">PRODUCTOS</h3>

            <h3 id="naranja">RELACIONADOS</h3>
        </div>
        <br>
        <div class="prod-rel">
            <img id="prod-rel" src="img/products/prod-rel-01.jpg" alt="">
        </div>
        <div class="prod-rel">
            <img id="prod-rel" src="img/products/prod-rel-02.jpg" alt="">
        </div>
        <div class="prod-rel">
            <img id="prod-rel" src="img/products/prod-rel-01.jpg" alt="">
        </div>

    </section>
</div>
@endsection
