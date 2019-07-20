<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perro_factura_ingrediente extends Model
{
    protected $table = 'perro_factura_ingrediente';
    protected $fillable = ['perro_f_id','ingre_id'];
    public $timestamps = false;
}
