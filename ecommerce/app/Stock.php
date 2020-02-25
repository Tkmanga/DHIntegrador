<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
  protected $table = "stock";
  protected $id = "id";
  public $timestamps = false;
  public $guarded = [];

  public function getProducto()
{
    return $this->belongsTo(Producto::class, 'id');
}

}
