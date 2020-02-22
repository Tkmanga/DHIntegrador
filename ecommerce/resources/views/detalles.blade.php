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
        <div class="col-sm-8"><img src="img\productos\{{$producto->imagen}}"></div>
        <div class="col-sm-4">
          <ul>
            <strong>Precio</strong>
            <li>${{$producto->precio}}</li>
            <li>Stock disponible:</li>
            <ul>
              <li>{{$producto->getStock->cantidad}}</li>
            </ul>
            <li>Colores Disponibles:</li>
            <ul>
              <li>{{$producto->getStock->fecha}}</li>
            </ul>
            <li>descripcion:</li>
            <p>{{$producto->descripcion}}</p>
          </ul>
        </div>
      </div>
      <h4>Otros productos que quizas te interesen: </h4>
      <div class="row">
        <div class=" col-6 col-md-3">
          <a href="http://localhost:8000/"><img src="img/carrito/pelota.jpg" width="100px"></a>
        </div>
        <div class=" col-6 col-md-3">
          <a href="http://localhost:8000/"><img src="img/carrito/short.jpg" width="100px"></a>
        </div>
        <div class=" col-6 col-md-3">
          <a href="http://localhost:8000/"><img src="img/carrito/zapatos.jpg" width="100px"></a>
        </div>
        <div class=" col-6 col-md-3">
          <a href="http://localhost:8000/"><img src="img/carrito/jeans.jpg" width="100px"></a>
        </div>

      </div>
    </div>

  </div>

@endsection
