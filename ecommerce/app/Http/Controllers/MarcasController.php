<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;
use App\Producto;

class MarcasController extends Controller
{
  public function index(){
    $marcas = Marca::all();
    $vac = compact('marcas');
    return view('adminMarcas',$vac);
  }

  public function create(){
    return view('formAgregarMarca');
  }

  public function store(Request $request){
    $vali = $request->validate(
      [
        'nombre' => 'required|min:3|max:70'
      ]
    );
    $marca = new Marca;
    $nombre = $request->nombre;
    $marca->nombre = $nombre;
    $marca->save();
    return redirect('/adminMarcas')->with('mensaje', 'Marca '.$nombre.' agregada con éxito');
  }

  public function edit($id)
  {
    $marca = Marca::find($id);
    return  view('formModificarMarca',['marca'=>$marca]);
  }

  public function update(Request $request, $id){
    $marca = Marca::find($id);
    $nombre = $request->input('nombre');
    $validar = $request->validate(
            [
                'nombre' => 'required|min:3|max:75'
            ]);
    $marca->nombre = $request->nombre;
    $marca->update();
    return redirect('/adminMarcas')->with('mensaje', 'Marca '.$marca->nombre.' actualizada con éxito');
  }

  public function destroy($id)
  {
    $marca = Marca::find($id);
    $nombre = $marca->nombre;
    $productos = Producto::where('marca', '=', $id)->get();
    foreach($productos as $producto){
      $idProducto = $producto->id;
      ProductoController::destroy($idProducto);
    }
    $marca->delete();
    return redirect('/adminMarcas')->with('mensaje', 'Marca '.$marca->nombre.' actualizada con éxito');;

    //Esto no se puede hacer por que tiene referencias
    //DB::table('marcas')->truncate();
  }
}
