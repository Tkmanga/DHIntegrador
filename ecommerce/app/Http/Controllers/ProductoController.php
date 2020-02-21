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
}
