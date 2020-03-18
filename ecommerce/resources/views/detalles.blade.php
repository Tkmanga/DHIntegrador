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
        <div class="col-sm-8"><img class="photo" src="http://localhost:8000/img/productos/{{$producto->imagen}}" alt="{{$producto->nombre}}"></div>
        <div class="col-sm-4">
          <ul>
            <strong>Precio</strong>
            <li>${{$producto->precio}}</li>

             @if($producto->id >= 1 && $producto->id <= 12)
                  <li>Stock disponible:</li>
                  <ul>
                      <li>{{$producto->getStock->cantidad}}</li>
                  </ul>
                  <li>Ingreso el:</li>
                  <ul>
                      <li>{{$producto->getStock->fecha}}</li>
                  </ul>
             @endif
            <li>descripcion:</li>
            <p>{{$producto->descripcion}}</p>
          </ul>
        </div>
      </div>
      <h4>Otros productos que quizas te interesen: </h4>
      <div class="row">
        <div class=" col-6 col-md-3">
          <a href="{{url('/listadoProductos/1')}}">
              <img src="http://localhost:8000/img/productos/1.jpg" class="photo" alt="imagen producto reco" width="100px">
          </a>
        </div>
        <div class=" col-6 col-md-3">
            <a href="{{url('/listadoProductos/2')}}"><img src="http://localhost:8000/img/productos/2.jpg" class="photo" alt="imagen producto reco" width="100px"></a>
        </div>

          <div class=" col-6 col-md-3">
              <a href="{{url('/listadoProductos/3')}}"><img src="http://localhost:8000/img/productos/3.jpg" class="photo" alt="imagen producto reco" width="100px"></a>
          </div>

          <div class=" col-6 col-md-3">
              <a href="{{url('/listadoProductos/4')}}"><img src="http://localhost:8000/img/productos/4.jpg" class="photo" alt="imagen producto reco" width="100px"></a>
          </div>


      </div>
    </div>

  </div>

@endsection
