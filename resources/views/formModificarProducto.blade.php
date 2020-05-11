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
          Nombre Producto:
          <br>
          <input type="text" name="nombre" class="form-control" value="{{$producto->nombre}}">
         @error('nombre') {{$message}} @enderror
          <br>
          Precio Producto:
          <br>
          <input type="text" name="precio" class="form-control" value="{{$producto->precio}}">
         @error('nombre') {{$message}} @enderror
          <br>
          Descripcion Producto:
          <br>
          <input type="text" name="descripcion" class="form-control" value="{{$producto->descripcion}}">
         @error('nombre') {{$message}} @enderror
          <br>
          Marca Producto:
          <br>
          <input type="text" name="marca" class="form-control" value="{{$producto->marca}}">
         @error('nombre') {{$message}} @enderror
          <br>
          Categoria Producto:
          <br>
          <input type="text" name="categoria" class="form-control" value="{{$producto->categoria}}">
         @error('nombre') {{$message}} @enderror
          <br>
          Imagen Producto:
          <br>
          <img id="imagen" alt="Aqui se carga la imagen" src=""/>
          <input type="imagen" name="imagen" id="/imagen" onchange="document.getElementById('imagen').src=this.value;" class="form-control" value="{{$producto->imagen}}">
         @error('nombre') {{$message}} @enderror
          <br>
          <button class="btn btn-dark">Guardar cambios</button>
      </form>
  </div>
@endsection
