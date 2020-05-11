@extends('layouts')
@section('title')
  Administracion Productos
@endsection

@section('h1')
  Administracion de productos
@endsection

@section('main')
  <table class="table table-bordered table-hover table-striped">
  <thead class="thead-dark">
  <tr>
      <th>id</th>
      <th>Producto</th>
      <th colspan="2">
          <a href="/formAgregarProducto" class="btn btn-dark">Agregar</a>
      </th>
  </tr>
  </thead>
  <tbody>
@foreach( $productos as $producto )
<tr>
    <td>{{$producto->id}}</td>
    <td>{{$producto->nombre}}</td>

    <td>
        <a href="formModificarProducto/{{$producto->id}}" class="btn btn-outline-secondary">
            Modificar
        </a>
    </td>
    <td>
        <a href="eliminarProducto/{{$producto->id}}" class="btn btn-outline-secondary">
            Eliminar
        </a>
    </td>
</tr>
@endforeach
</tbody>
</table>
@endsection
