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
      @foreach( $productos as $producto )
    <tr>
        <td>{{$producto->idProducto}}</td>
        <td>{{$producto->nombre}}</td>
        <img class="photo" src="img\productos\{{$producto->imagen}}" alt="{{$producto->nombre}}">
        <td>
            <a href="" class="btn btn-outline-secondary">
                Modificar
            </a>
        </td>
        <td>
            <a href="" class="btn btn-outline-secondary">
                Eliminar
            </a>
        </td>
    </tr>
@endforeach
@endsection
