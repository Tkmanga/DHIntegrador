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


}
