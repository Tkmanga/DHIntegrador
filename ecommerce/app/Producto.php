<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  protected $table = "productos";
  protected $id = "idProducto";
  public $timestamps = false;
  public $guarded = [];
}
