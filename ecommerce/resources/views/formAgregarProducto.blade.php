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
        Producto:
        <br>
        <input type="text" name="nombre" class="form-control">
       @error('nombre') {{$message}} @enderror
        <br>
        <button class="btn btn-dark">Agregar Producto</button>

    </form>
  </div>


@endsection



