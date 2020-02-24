@extends('plantilla')
@section('title')
  Productos
@endsection
@section('estilo2')
  "\css\backgroundBlue.css"
@endsection
@section('listadoProductos')
  "\css\listaProductos.css"
@endsection
@section('main')
      <h1>Nuestros productos: </h1>
      <section id="servicios">
        <div class="container">
          <div class="row">
              @foreach( $productos as $producto )
                <article class="col-12 col-md-6 col-lg-3">
                  <div class="photo-container">
                    <img class="photo" src="img\productos\{{$producto->imagen}}" alt="{{$producto->nombre}}">
                  </div>
                  <h2>{{$producto->nombre}}</h2>
                  <h4>${{$producto->precio}}</h4>
                </article>
              @endforeach
          </div>
        </div>
      </section>
@endsection
