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

                <div class="card" style="width: 12rem;">
                  <div class="photo-container">

                    <img class="card-img-top" src="img\productos\{{$producto->imagen}}" class="img-responsive" alt="{{$producto->nombre}}" >

                  <div class="card-body">
                  <h5>{{$producto->nombre}}</h5>
                  <h5>  <strong> ${{$producto->precio}}  </strong>  </h5>
                  </div>
                </div>
                 </div>


              @endforeach
          </div>
        </div>
      </section>
@endsection
