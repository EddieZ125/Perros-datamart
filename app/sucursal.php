<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sucursal extends Model
{
	protected $table = 'sucursal';
    protected $fillable = [
        'nombre', 'direccion', 'telefono',
    ];
    public $timestamps = false;
}
