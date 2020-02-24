@extends('plantilla')
@section('title')
  Administracion Marca
@endsection

@section('estilo2')
  "\css\app.css"
@endsection

@section('main')
  <div class="alert bg-light py-3">
      <form action="/editarMarca/{{$marca->id}}" method="post">
          @csrf
          Nombre:
          <br>
          <input type="text" name="nombre" class="form-control" value="{{$marca->nombre}}">
         @error('nombre') {{$message}} @enderror
          <br>
          <button class="btn btn-dark">Guardar cambios</button>
      </form>
  </div>
@endsection
