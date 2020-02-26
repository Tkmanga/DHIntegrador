@extends('layouts')
@section('title')
  Administracion Categoria
@endsection

@section('h1')
  Editar Categoria
@endsection
@section('main')
  <div class="alert bg-light py-3">
      <form action="/editarCategoria/{{$categoria->id}}" method="post">
          @csrf
          Nombre:
          <br>
          <input type="text" name="nombre" class="form-control" value="{{$categoria->nombre}}">
         @error('nombre') {{$message}} @enderror
          <br>
          <button class="btn btn-dark">Guardar cambios</button>
      </form>
  </div>
@endsection
