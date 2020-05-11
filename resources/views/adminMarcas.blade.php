@extends('layouts')
@section('title')
  Administracion Marca
@endsection

@section('h1')
  Index
@endsection

@section('main')

  <table class="table table-bordered table-hover table-striped">
  <thead class="thead-dark">
  <tr>
      <th>id</th>
      <th>Marca</th>
      <th colspan="2">
          <a href="/formAgregarMarca" class="btn btn-dark">Agregar</a>
      </th>
  </tr>
  </thead>
  <tbody>
@foreach( $marcas as $marca )
<tr>
    <td>{{$marca->id}}</td>
    <td>{{$marca->nombre}}</td>

    <td>
        <a href="formModificarMarca/{{$marca->id}}" class="btn btn-outline-secondary">
            Modificar
        </a>
    </td>
    <td>
        <a href="eliminarMarca/{{$marca->id}}" class="btn btn-outline-secondary">
            Eliminar
        </a>
    </td>
</tr>
@endforeach
</tbody>
</table>
@endsection
