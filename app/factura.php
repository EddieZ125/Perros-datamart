<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    protected $table = 'factura';
    protected $fillable = ['cliente_id','sucursal_id','fecha'];
    public $timestamps = false;
}
