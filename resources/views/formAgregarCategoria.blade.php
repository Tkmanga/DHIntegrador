@extends('plantilla')
@section('title')
  Administracion Categoria
@endsection

@section('estilo2')
  "\css\app.css"
@endsection

@section('main')
  <div class="alert bg-light py-3">
    <form action="agregarCategoria" method="POST">
        @csrf
        Categoria:
        <br>
        <input type="text" name="nombre" class="form-control">
       @error('nombre') {{$message}} @enderror
        <br>
        <button class="btn btn-dark">Agregar Categoria</button>

    </form>
  </div>


@endsection
