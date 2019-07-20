<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class factura_refresco extends Model
{
    protected $table = 'factura_refresco';
    protected $fillable = ['factura_id','refresco_id'];
    public $timestamps = false;
}
