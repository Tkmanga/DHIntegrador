@extends('plantilla')
@section('title')
  CompreYa!
@endsection
@section('estilo2')
  "\css\backgroundBlue.css"
@endsection
@section('main')
  <div>
    <div class="container">
      <div class="row">
        <div class="col-sm-8"><img src="img/carrito/remera.jpg"></div>
        <div class="col-sm-4">
          <ul>
            <li>Precio: 100</li>
            <li>Tallas Disponibles:</li>
            <ul>
              <li>S</li>
              <li>M</li>
              <li>L</li>
              <li>XL</li>
            </ul>
            <li>Colores Disponibles:</li>
            <ul>
              <li>Negro</li>
              <li>Rojo</li>
              <li>Verde</li>
            </ul>
            <li>Materiales:</li>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia minima debitis autem magnam numquam vitae amet doloribus iste nam perspiciatis at tenetur quis, molestias ex recusandae provident sequi consequuntur explicabo quisquam
              quasi, ipsa adipisci! Esse quia dignissimos.</p>
          </ul>
        </div>
      </div>
      <h4>Otros productos que quizas te interesen: </h4>
      <div class="row">
        <div class=" col-6 col-md-3">
          <a href="detalles.html"><img src="img/carrito/pelota.jpg" width="100px"></a>
        </div>
        <div class=" col-6 col-md-3">
          <a href="detalles.html"><img src="img/carrito/short.jpg" width="100px"></a>
        </div>
        <div class=" col-6 col-md-3">
          <a href="detalles.html"><img src="img/carrito/zapatos.jpg" width="100px"></a>
        </div>

        <div class=" col-6 col-md-3">
          <a href="detalles.html"><img src="img/carrito/jeans.jpg" width="100px"></a>
        </div>

      </div>
    </div>
  </div>

@endsection
