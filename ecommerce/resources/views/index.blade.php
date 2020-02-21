@extends('plantilla')
@section(' ')
  CompreYa!
@endsection
@section('estilo2')
  "\css\backgroundBlue.css"
@endsection
@section('main')

  <artice id="imagenes">
    <div id="carouselExampleFade" class="carousel slide carousel-fade container" data-ride="carousel">
      <div class="carousel-inner row">
        <div class="carousel-item active col">
          <img src="img\img1.jpg" class="d-block w-100" alt="Publica">
        </div>
        <div class="carousel-item col">
          <img src="img\img2.jpg" class="d-block w-100" alt="Regatea">
        </div>
        <div class="carousel-item col">
          <img src="img\img3.jpg" class="d-block w-100" alt="Vende">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </artice>
  <br>
  <article id="infoRapida">
    <h1>Bienvenidos a VendaYa!</h1>
  </article>

  <section id="servicios">
    <div class="container">
      <div class="row">
        <article class="col-12 col-md-6">
          <img class="imagen" src="img\empleados\avatar.jpg" alt="img online shopping">
          <h2>Lorem ipsum dolor sit amet.</h2>
          <p>
            Distinctio nemo mollitia tempora earum officiis itaque explicabo fuga cumque, fugit aperiam magnam maxime eius quaerat sed laborum, rem nesciunt? Qui, laboriosam.
          </p>
        </article>
        <article class="col-12 col-md-6">
          <img class="imagen" src="img\033-shopping-cart.svg" alt="img shopping cart">
          <h2>Lorem ipsum dolor sit amet.</h2>
          <p>
            Distinctio nemo mollitia tempora earum officiis itaque explicabo fuga cumque, fugit aperiam magnam maxime eius quaerat sed laborum, rem nesciunt? Qui, laboriosam.
          </p>
        </article>
        <article class="col-12 col-md-6">
          <img class="imagen" src="img\031-currency.svg" alt="img currency">
          <h2>Lorem ipsum dolor sit amet.</h2>
          <p>
            Distinctio nemo mollitia tempora earum officiis itaque explicabo fuga cumque, fugit aperiam magnam maxime eius quaerat sed laborum, rem nesciunt? Qui, laboriosam.
          </p>
        </article>
        <article class="col-12 col-md-6">
          <img class="imagen" src="img\011-call-center.svg" alt="img call center">
          <h2>Lorem ipsum dolor sit amet.</h2>
          <p>
            Distinctio nemo mollitia tempora earum officiis itaque explicabo fuga cumque, fugit aperiam magnam maxime eius quaerat sed laborum, rem nesciunt? Qui, laboriosam.
          </p>
        </article>
        <article class="col-12 col-md-6">
          <img class="imagen" src="img\020-delivery.svg" alt="img delivery">
          <h2>Lorem ipsum dolor sit amet.</h2>
          <p>
            Distinctio nemo mollitia tempora earum officiis itaque explicabo fuga cumque, fugit aperiam magnam maxime eius quaerat sed laborum, rem nesciunt? Qui, laboriosam.
          </p>
        </article>
        <article class="col-12 col-md-6">
          <img class="imagen" src="img\041-shield.svg" alt="img shield">
          <h2>Lorem ipsum dolor sit amet.</h2>
          <p>
            Distinctio nemo mollitia tempora earum officiis itaque explicabo fuga cumque, fugit aperiam magnam maxime eius quaerat sed laborum, rem nesciunt? Qui, laboriosam.
          </p>
        </article>
      </div>
    </div>
  </section>
@endsection
