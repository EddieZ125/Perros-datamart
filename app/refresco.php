<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class refresco extends Model
{
    protected $table = 'refresco';
    protected $fillable = ['nombre','precio_venta','costo'];
    public $timestamps = false;
}
