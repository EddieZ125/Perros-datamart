<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\refresco;
use Faker\Generator as Faker;

$factory->define(refresco::class, function (Faker $faker) {
	$precio_venta = $faker->randomFloat(2,100,2000);
	$costo = $precio_venta - $faker->randomFloat(2,50,$precio_venta-40);
    return [
        'nombre' => $faker->company,
        'precio_venta' => $precio_venta,
        'costo' => $costo
    ];
});
