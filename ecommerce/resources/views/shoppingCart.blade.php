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
      @foreach( $productos as $producto )
          <div class="col-md-3 text-center">
            <img src="img\productos\{{$producto->imagen}}">
            <br>
            {{$producto->nombre}}
            <br>
            <strong>${{$producto->precio}}</strong>
            <br>
            <button class="btn btn-danger my-cart-btn">Agregar al carrito</button>
            <a href="http://localhost:8000/listadoProductos/{{$producto->id}}" class="btn btn-info">Detalle</a>
          </div>
        @endforeach
    </div>

@endsection
