<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\factura;
use Faker\Generator as Faker;

$factory->define(factura::class, function (Faker $faker) {
	$sucursalesID = DB::table('sucursal')->pluck('id');
	$clientesID = DB::table('cliente')->pluck('id');
    return [
    	'cliente_id' => $faker->randomElement($clientesID),
    	'sucursal_id' => $faker->randomElement($sucursalesID),
    	'fecha' => $faker->dateTime()
    ];
});