<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perro extends Model
{
    protected $table = 'perro';
    protected $fillable = ['nombre','precio_venta','costo','fecha'];
    public $timestamps = false;
}
