@extends('plantilla')
@section('title')
  Administracion Marca
@endsection

@section('estilo2')
  "\css\app.css"
@endsection

@section('main')
  <div class="alert bg-light py-3">
    <form action="/agregarMarca" method="post">
        @csrf
        Marca:
        <br>
        <input type="text" name="nombre" class="form-control">
       @error('nombre') {{$message}} @enderror
        <br>
        <button class="btn btn-dark">Agregar Marca</button>

    </form>
  </div>


@endsection
