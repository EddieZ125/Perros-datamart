<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
	protected $table = 'cliente';
    protected $fillable = ['nombre','direccion','telefono'];
    public $timestamps = false;
}
