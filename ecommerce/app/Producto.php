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
    return $this->belongsTo(Marca::class, 'id');
}
public function getCategoria()
{
    return $this->belongsTo(Categoria::class, 'id');
}

public function getStock()
{
    return $this->belongsTo(Stock::class, 'id');
}

}
