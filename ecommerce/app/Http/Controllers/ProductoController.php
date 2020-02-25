<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
  public function listaProductos()
  {
    $productos = Producto::all();
    return view('listaProductos',['productos'=>$productos]);
  }

  public function detalleProducto($id)
  {
    $producto = Producto::find($id);
    $vac = compact("producto");
    return view('detalles',$vac);
  }

  public function listaProductosCliente()
  {
    $productos = Producto::all();
    $stock =
    $vac = compact("productos");
    return view('shoppingCart',$vac);
  }

  public function index()
  {
    $productos = Producto::all();
    $vac = compact('productos');
    return view('adminProductos',$vac);
    
  }

  public function create(){
    return view('formAgregarProducto');
  }

  public function store(Request $request){
    $vali = $request->validate(
      [
        'nombre' => 'required|min:3|max:70'
      ]
    );
    $producto = new Producto;
    $nombre = $request->nombre;
    $producto->nombre = $nombre;
    $producto->save();
  }

  public function edit($id)
  {
    $producto = Producto::find($id);
    return  view('formModificarProducto',['producto'=>$producto]);
  }

  public function update(Request $request, $id){
    $producto = Producto::find($id);
    $validar = $request->validate(
            [
                'nombre' => 'required|min:3|max:75'
            ]);
    $producto->nombre = $request->nombre;
    $producto->update();
  }

  public static function destroy($id)
  {
    $producto = Producto::find($id);
    $stock = $producto->getStock($id);
    $stock->delete();
    $producto->delete();

  }
}
