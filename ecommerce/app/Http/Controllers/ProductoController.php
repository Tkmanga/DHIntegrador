<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Producto;

class ProductoController extends Controller
{
  public function listaProductos()
  {
    return view('listaProductos');
  }
}
