<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
class CategoriaController extends Controller
{
  public function index()
  {
    $categorias = Categoria::all();
    $vac = compact('categorias');
    return view('adminCategorias',$vac);

  }

    public function create(){
      return view('formAgregarCategoria');
    }

    public function store(Request $request){
      $vali = $request->validate(
        [
          'nombre'=> 'required|min:3|max:75'
        ]
      );
      $categoria = new Categoria;
      $categoria->nombre = $request->nombre;
      $categoria->save();
    }

    public function destroy($id){
      
    }

    public function edit(){
    }

    public function update(){
    }
}
