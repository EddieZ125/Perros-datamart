<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ingrediente extends Model
{
    protected $table = 'ingrediente';
    protected $fillable = ['nombre','costo'];
    public $timestamps = false;
}
