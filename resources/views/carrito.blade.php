@extends('layouts.plantilla')
@section('css')
<link rel="stylesheet" href="../../css/styleCarrito.css">
@endsection
@section('Carrito')
@endsection
@section('main')

   <section class="ppal">
<!--        <h1 class="ppal__title">PRODUCTOS</h1>-->
       <div class="main__prod">
           <h2 class="prod__title" id="blanco">SU CARRITO DE COMPRAS</h2>
           <h2 class="prod__title" id="naranja"> DE COMPRAS</h2>
           <div class="prod__1">
               <article class="prod__1">
                   <img class="prod__img" src="img/products/prod-01.jpeg" alt="">
                   <div class="prod__1--descripcion">
                       <h3 class="prod__title">Producto 1</h3>
                       <br>
                       <p class="prod__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                       <br>
                       <p class="prod__price">$300</p>
                   </div>
                   <div class="prod__cantidad">
                       <label>cantidad</label><input class="prod__cantidad" type="number" name="" value="">
                       <br>
                       <button class="prod__buttom--delete" type="button" name="button">Eliminar</button>
                   </div>
               </article>
           </div>
           <div class="prod__1">
               <article class="prod__1">
                   <img class="prod__img" src="img/products/prod-01.jpeg" alt="">
                   <div class="prod__1--descripcion">
                       <h3 class="prod__title">Producto 2</h3>
                       <br>
                       <p class="prod__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                       <br>
                       <p class="prod__price">$800</p>
                   </div>
                   <div class="prod__cantidad">
                       <label>cantidad</label><input class="prod__cantidad" type="number" name="" value="">
                       <br>
                       <button class="prod__buttom--delete" type="button" name="button">Eliminar</button>
                   </div>
               </article>
           </div>
       </div>
       <aside class="sumary">
           <h2 class="sumary__title">RESUMEN DE COMPRA</h2>
           <div class="sumary">
               <input class="sumary__code" type="text" name="prom__code" value="" placeholder="Código de descuento?">
               <h5 class="sumary__title--prod">producto 1</h5>
               <h5 class="sumary__price">$100</h5> <br>
               <h5 class="sumary__title--prod">producto 2</h5>
               <h5 class="sumary__price">$100</h5> <br>
               <h4 class="sumary__price--total">TOTAL</h4>
<h4 class="sumary__price--total--price">$230</h4>
               <button class="sumary__buttom--buy" type="button" name="button"> <a class="sumary__buttom" href="inicio-axel.php"> FINALIZAR COMPRA</a></button>
           </div>
       </aside>
   </section>
   <footer>
       <?php include_once("footer.php") ?>
   </footer>
</body>
</html>

@endsection
