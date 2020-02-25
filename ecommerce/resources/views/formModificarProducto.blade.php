@extends('layouts')
@section('title')
  Administracion Producto
@endsection

@section('h1')
  Editar Producto
@endsection
@section('main')
  <div class="alert bg-light py-3">
      <form action="/editarProducto/{{$producto->id}}" method="post">
          @csrf
          Nombre:
          <br>
          <input type="text" name="nombre" class="form-control" value="{{$producto->nombre}}">
         @error('nombre') {{$message}} @enderror
          <br>
          <button class="btn btn-dark">Guardar cambios</button>
      </form>
  </div>
@endsection
