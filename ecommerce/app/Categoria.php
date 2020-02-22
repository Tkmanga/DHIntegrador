<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categorias";
    protected $id = "id";
    public $timestamps = false;
    public $guarded = [];
}
