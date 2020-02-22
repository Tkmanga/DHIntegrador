<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  protected $table = "productos";
  protected $id = "id";
  public $timestamps = false;
  public $guarded = [];

  public function getMarca()
{
    return $this->belongsTo('App\Marca', 'id', 'id');
}
public function getCategoria()
{
    return $this->belongsTo('App\Categoria', 'id', 'id');
}

public function getStock()
{
    return $this->belongsTo('App\Stock', 'id', 'id');
}

}
