@extends('layouts')
@section('title')
  Administracion Categorias
@endsection

@section('h1')
  Administracion de categoria
@endsection

@section('main')
  <table class="table table-bordered table-hover table-striped">
  <thead class="thead-dark">
  <tr>
      <th>id</th>
      <th>Categoria</th>
      <th colspan="2">
          <a href="/formAgregarCategoria" class="btn btn-dark">Agregar</a>
      </th>
  </tr>
  </thead>
  <tbody>
@foreach( $categorias as $categoria )
<tr>
    <td>{{$categoria->id}}</td>
    <td>{{$categoria->nombre}}</td>

    <td>
        <a href="formModificarCategoria/{{$categoria->id}}" class="btn btn-outline-secondary">
            Modificar
        </a>
    </td>
    <td>
        <a href="eliminarCategoria/{{$categoria->id}}" class="btn btn-outline-secondary">
            Eliminar
        </a>
    </td>
</tr>
@endforeach
</tbody>
</table>
@endsection
