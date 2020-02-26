@extends('plantilla')
@section('title')
  Administracion Producto
@endsection

@section('estilo2')
  "\css\app.css"
@endsection

@section('main')
  <div class="alert bg-light py-3">
    <form action="/agregarProducto" method="post">
        @csrf
        Nombre Producto:
        <br>
        <input type="text" name="nombre" class="form-control">
       @error('nombre') {{$message}} @enderror
        <br>
        Precio Producto:
        <br>
        <input type="text" name="precio" class="form-control">
       @error('nombre') {{$message}} @enderror
        <br>
        Descripcion Producto:
        <br>
        <input type="text" name="descripcion" class="form-control">
       @error('nombre') {{$message}} @enderror
        <br>
        Marca Producto:
        <br>
        <input type="text" name="marca" class="form-control">
       @error('nombre') {{$message}} @enderror
        <br>
        Categoria Producto:
        <br>
        <input type="text" name="categoria" class="form-control">
       @error('nombre') {{$message}} @enderror
        <br>
        Imagen Producto:
        <br>
        <img id="imagen" alt="Aqui se carga la imagen" src=""/>
        <input type="imagen" name="imagen" id="/imagen" onchange="document.getElementById('imagen').src=this.value;" class="form-control">
       @error('nombre') {{$message}} @enderror
        <br>
        <button class="btn btn-dark">Agregar Producto</button>

    </form>
  </div>


@endsection



