@extends('layouts')
@section('title')
  Administracion Marca
@endsection

@section('h1')
  Editar Categoria
@endsection
@section('main')

  <h1>Panel de Administración</h1>

  <div class="list-group">
      <a class="list-group-item list-group-item-action" href="adminMarcas">
          Panel de administración de Marcas
      </a>
      <a class="list-group-item list-group-item-action" href="adminCategorias">
          Panel de administración de Categorías
      </a>
      <a class="list-group-item list-group-item-action" href="adminProductos">
          Panel de administración de Productos
      </a>
      <a class="list-group-item list-group-item-action" href="adminStock">
          Panel de administración de Stock
      </a>
      <a class="list-group-item list-group-item-action" href="adminUsuarios">
          Panel de administración de Usuarios
      </a>
  </div>

@endsection
