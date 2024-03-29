<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\perro;
use Faker\Generator as Faker;

$factory->define(perro::class, function (Faker $faker) {
	$precio_venta = $faker->randomFloat(2,10000,50000);
	$costo = $faker->randomFloat(2,100,1000);
    return [
        'nombre' => $faker->company,
        'precio_venta' => $precio_venta,
        'costo' => $costo
    ];
});
