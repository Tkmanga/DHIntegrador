@extends('plantilla')
@section('title')
  Carrito
@endsection
@section('estilo2')
  "\css\shoppingCart.css"
@endsection
@section('main')
  <div class="page-header">
    <h1>Products
      <div style="float: right; cursor: pointer;">
        <span class="glyphicon glyphicon-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
      </div>
    </h1>
  </div>

    <div class="row">
      <div class="col-md-3 text-center">
        <img src="img/carrito/remera.jpg">
        <br>
        T-shirt<strong> $100</strong>
        <br>
        <button class="btn btn-danger my-cart-btn">Add to Cart</button>
        <a href="detalles.html" class="btn btn-info">Details</a>
      </div>
      <div class="col-md-3 text-center">
        <img src="img/carrito/pelota.jpg">
        <br>
        Soccer Ball<strong> $500</strong>
        <br>
        <button class="btn btn-danger my-cart-btn">Add to Cart</button>
        <a href="detalles.html" class="btn btn-info">Details</a>
      </div>
      <div class="col-md-3 text-center">
        <img src="img/carrito/short.jpg">
        <br>
        Short <strong> $150</strong>
        <br>
        <button class="btn btn-danger my-cart-btn">Add to Cart</button>
        <a href="detalles.html" class="btn btn-info">Details</a>
      </div>
      <div class="col-md-3 text-center">
        <img src="img/carrito/zapatos.jpg">
        <br>
        Dress Shoes <strong> $1200</strong>
        <br>
        <button class="btn btn-danger my-cart-btn">Add to Cart</button>
        <a href="detalles.html" class="btn btn-info">Details</a>
      </div>
      <div class="col-md-3 text-center">
        <img src="img/carrito/jeans.jpg">
        <br>
        Jeans<strong> $2000</strong>
        <br>
        <button class="btn btn-danger my-cart-btn">Add to Cart</button>
        <a href="detalles.html" class="btn btn-info">Details</a>
      </div>
      <div class="col-md-3 text-center">
        <img src="img/carrito/camisa.jpg">
        <br>
        Shirt<strong> $300</strong>
        <br>
        <button class="btn btn-danger my-cart-btn">Add to Cart</button>
        <a href="detalles.html" class="btn btn-info">Details</a>
      </div>
      <div class="col-md-3 text-center">
        <img src="img/carrito/lentes.jpg">
        <br>
        Glasses<strong> $300</strong>
        <br>
        <button class="btn btn-danger my-cart-btn">Add to Cart</button>
        <a href="detalles.html" class="btn btn-info">Details</a>
      </div>
      <div class="col-md-3 text-center">
        <img src="img/carrito/baloncesto.jpg">
        <br>
        Basketball Ball<strong> $350</strong>
        <br>
        <button class="btn btn-danger my-cart-btn">Add to Cart</button>
        <a href="detalles.html" class="btn btn-info">Details</a>
      </div>
    </div>
    <!--

    <section id="servicios">
      <div class="container">
        <div class="row">
          <article class="col-12 col-md-6 col-lg-3">
            <div class="photo-container">
              <img class="photo" src="img\productos\1.jpg" alt="dorito 1">
              <a href="detalles.html"><img class="special" src="img\productos\pngocean.png" alt="descuento efectivo"></a>
            </div>

            <h2>Lorem ipsum dolor sit amet.</h2>
            <p>
              Distinctio nemo mollitia tempora earum officiis itaque explicabo fuga cumque, fugit aperiam magnam maxime eius quaerat sed laborum, rem nesciunt? Qui, laboriosam.
            </p>
          </article>
          <article class="col-12 col-md-6 col-lg-3">
            <div class="photo-container">
              <img class="photo" src="img\productos\2.jpg" alt="dorito 2">
              <a href="detalles.html"><img class="special" src="img\productos\pngocean.png" alt="descuento efectivo"></a>
            </div>
            <h2>Lorem ipsum dolor sit amet.</h2>
            <p>
              Distinctio nemo mollitia tempora earum officiis itaque explicabo fuga cumque, fugit aperiam magnam maxime eius quaerat sed laborum, rem nesciunt? Qui, laboriosam.
            </p>
          </article>
          <article class="col-12 col-md-6 col-lg-3">
            <div class="photo-container">
              <img class="photo" src="img\productos\3.jpg" alt="dorito 3">
              <a href="detalles.html"><img class="special" src="img\productos\pngocean.png" alt="descuento efectivo"></a>
            </div>
            <h2>Lorem ipsum dolor sit amet.</h2>
            <p>
              Distinctio nemo mollitia tempora earum officiis itaque explicabo fuga cumque, fugit aperiam magnam maxime eius quaerat sed laborum, rem nesciunt? Qui, laboriosam.
            </p>
          </article>
          <article class="col-12 col-md-6 col-lg-3">
            <div class="photo-container">
              <img class="photo" src="img\productos\4.jpg" alt="dorito 4">
              <a href="detalles.html"><img class="special" src="img\productos\pngocean.png" alt="descuento efectivo"></a>
            </div>
            <h2>Lorem ipsum dolor sit amet.</h2>
            <p>
              Distinctio nemo mollitia tempora earum officiis itaque explicabo fuga cumque, fugit aperiam magnam maxime eius quaerat sed laborum, rem nesciunt? Qui, laboriosam.
            </p>
          </article>
          <article class="col-12 col-md-6 col-lg-3">
            <div class="photo-container">
              <img class="photo" src="img\productos\5.jpg" alt="dorito 5">
              <a href="detalles.html"><img class="special" src="img\productos\pngocean.png" alt="descuento efectivo"></a>
            </div>
            <h2>Lorem ipsum dolor sit amet.</h2>
            <p>
              Distinctio nemo mollitia tempora earum officiis itaque explicabo fuga cumque, fugit aperiam magnam maxime eius quaerat sed laborum, rem nesciunt? Qui, laboriosam.
            </p>
          </article>
          <article class="col-12 col-md-6 col-lg-3">
            <div class="photo-container">
              <img class="photo" src="img\productos\6.jpg" alt="dorito 6">
              <a href="detalles.html"><img class="special" src="img\productos\pngocean.png" alt="descuento efectivo"></a>
            </div>
            <h2>Lorem ipsum dolor sit amet.</h2>
            <p>
              Distinctio nemo mollitia tempora earum officiis itaque explicabo fuga cumque, fugit aperiam magnam maxime eius quaerat sed laborum, rem nesciunt? Qui, laboriosam.
            </p>
          </article>
          <article class="col-12 col-md-6 col-lg-3">
            <div class="photo-container">
              <img class="photo" src="img\productos\7.jpg" alt="dorito 7">
              <a href="detalles.html"><img class="special" src="img\productos\pngocean.png" alt="descuento efectivo"></a>
            </div>
            <h2>Lorem ipsum dolor sit amet.</h2>
            <p>
              Distinctio nemo mollitia tempora earum officiis itaque explicabo fuga cumque, fugit aperiam magnam maxime eius quaerat sed laborum, rem nesciunt? Qui, laboriosam.
            </p>
          </article>
          <article class="col-12 col-md-6 col-lg-3">
            <div class="photo-container">
              <img class="photo" src="img\productos\8.jpg" alt="dorito 8">
              <a href="detalles.html"><img class="special" src="img\productos\pngocean.png" alt="descuento efectivo"></a>
            </div>
            <h2>Lorem ipsum dolor sit amet.</h2>
            <p>
              Distinctio nemo mollitia tempora earum officiis itaque explicabo fuga cumque, fugit aperiam magnam maxime eius quaerat sed laborum, rem nesciunt? Qui, laboriosam.
            </p>
          </article>
          <article class="col-12 col-md-6 col-lg-3">
            <div class="photo-container">
              <img class="photo" src="img\productos\9.jpg" alt="dorito 9">
              <a href="detalles.html"><img class="special" src="img\productos\pngocean.png" alt="descuento efectivo"></a>
            </div>
            <h2>Lorem ipsum dolor sit amet.</h2>
            <p>
              Distinctio nemo mollitia tempora earum officiis itaque explicabo fuga cumque, fugit aperiam magnam maxime eius quaerat sed laborum, rem nesciunt? Qui, laboriosam.
            </p>
          </article>
          <article class="col-12 col-md-6 col-lg-3">
            <div class="photo-container">
              <img class="photo" src="img\productos\10.jpg" alt="dorito 10">
              <a href="detalles.html"><img class="special" src="img\productos\pngocean.png" alt="descuento efectivo"></a>
            </div>
            <h2>Lorem ipsum dolor sit amet.</h2>
            <p>
              Distinctio nemo mollitia tempora earum officiis itaque explicabo fuga cumque, fugit aperiam magnam maxime eius quaerat sed laborum, rem nesciunt? Qui, laboriosam.
            </p>
          </article>
          <article class="col-12 col-md-6 col-lg-3">
            <div class="photo-container">
              <img class="photo" src="img\productos\11.jpg" alt="dorito 11">
              <a href="detalles.html"><img class="special" src="img\productos\pngocean.png" alt="descuento efectivo"></a>
            </div>
            <h2>Lorem ipsum dolor sit amet.</h2>
            <p>
              Distinctio nemo mollitia tempora earum officiis itaque explicabo fuga cumque, fugit aperiam magnam maxime eius quaerat sed laborum, rem nesciunt? Qui, laboriosam.
            </p>
          </article>
          <article class="col-12 col-md-6 col-lg-3">
            <div class="photo-container">
              <img class="photo" src="img\productos\12.jpg" alt="dorito 12">
              <a href="detalles.html"><img class="special" src="img\productos\pngocean.png" alt="descuento efectivo"></a>
            </div>
            <h2>Lorem ipsum dolor sit amet.</h2>
            <p>
              Distinctio nemo mollitia tempora earum officiis itaque explicabo fuga cumque, fugit aperiam magnam maxime eius quaerat sed laborum, rem nesciunt? Qui, laboriosam.
            </p>
          </article>
          <article class="col-12 col-md-6 col-lg-3">
            <div class="photo-container">
              <img class="photo" src="img\productos\13.jpg" alt="dorito 13">
              <a href="detalles.html"><img class="special" src="img\productos\pngocean.png" alt="descuento efectivo"></a>
            </div>
            <h2>Lorem ipsum dolor sit amet.</h2>
            <p>
              Distinctio nemo mollitia tempora earum officiis itaque explicabo fuga cumque, fugit aperiam magnam maxime eius quaerat sed laborum, rem nesciunt? Qui, laboriosam.
            </p>
          </article>
        </div>
      </div>
    </section>
    -->
@endsection
