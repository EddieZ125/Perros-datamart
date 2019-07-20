<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perro_ingrediente extends Model
{
    protected $table = 'perro_ingrediente';
    protected $fillable = ['perro_id','ingrediente_id'];
    public $timestamps = false;
}
