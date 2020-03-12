@extends('plantilla')
@section(' ')
  CompreYa!
@endsection
@section('estilo2')
  "\css\backgroundBlue.css"
@endsection
@section('main')

<div class="container">
    <article id="imagenes">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/comerciointernacional.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/mano.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/Comercio_Internacional.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>  
        
    </div>
    
</article>
<br>
<div class="container">
    <article id="infoRapida" >
        <h1>Bienvenidos a VendaYa!</h1> 
    </div>
</article>

<section id="servicios">
    <div class="container">
        <div class="row">
            <article class="col-12 col-md-6">
                <img class="imagen" src="img\012-online-shopping.svg" alt="img online shopping">
                <h2>VER PRODUCTOS DISPONIBLES.</h2>
                <p>
                    Distinctio nemo mollitia tempora earum officiis itaque explicabo fuga cumque, fugit aperiam magnam maxime eius quaerat sed laborum, rem nesciunt? Qui, laboriosam.
                </p>
            </article>
            <article class="col-12 col-md-6">
                <img class="imagen" src="img\033-shopping-cart.svg" alt="img shopping cart">
                <h2>ENVIOS NACIONAL.</h2>
                <p>
                    Distinctio nemo mollitia tempora earum officiis itaque explicabo fuga cumque, fugit aperiam magnam maxime eius quaerat sed laborum, rem nesciunt? Qui, laboriosam.
                </p>
            </article>
            <article class="col-12 col-md-6">
                <img class="imagen" src="img\031-currency.svg" alt="img currency">
                <h2>COSTOS DE EMBALAJE.</h2>
                <p>
                    Distinctio nemo mollitia tempora earum officiis itaque explicabo fuga cumque, fugit aperiam magnam maxime eius quaerat sed laborum, rem nesciunt? Qui, laboriosam.
                </p>
            </article>
            <article class="col-12 col-md-6">
                <img class="imagen" src="img\011-call-center.svg" alt="img call center">
                <h2>REPRESENTANTES ATENCION.</h2>
                <p>
                    Distinctio nemo mollitia tempora earum officiis itaque explicabo fuga cumque, fugit aperiam magnam maxime eius quaerat sed laborum, rem nesciunt? Qui, laboriosam.
                </p>
            </article>
            <article class="col-12 col-md-6">
                <img class="imagen" src="img\020-delivery.svg" alt="img delivery">
                <h2>ENVIOS INTERNACIONAL.</h2>
                <p>
                    Distinctio nemo mollitia tempora earum officiis itaque explicabo fuga cumque, fugit aperiam magnam maxime eius quaerat sed laborum, rem nesciunt? Qui, laboriosam.
                </p>
            </article>
            <article class="col-12 col-md-6">
                <img class="imagen" src="img\041-shield.svg" alt="img shield">
                <h2>CALIDAD DEL PRODUCTO.</h2>
                <p>
                    Distinctio nemo mollitia tempora earum officiis itaque explicabo fuga cumque, fugit aperiam magnam maxime eius quaerat sed laborum, rem nesciunt? Qui, laboriosam.
                </p>
            </article>
        </div>
    </div>
</section>

@endsection
