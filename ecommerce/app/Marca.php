<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
  protected $table = "marcas";
  protected $id = "id";
  public $timestamps = false;
  public $guarded = [];
}
