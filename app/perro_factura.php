<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perro_factura extends Model
{
    protected $table = 'perro_factura';
    protected $fillable = ['cantidad','perro_id','factura_id'];
    public $timestamps = false;
}
