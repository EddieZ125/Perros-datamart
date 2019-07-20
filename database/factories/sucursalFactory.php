<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\sucursal;
use Faker\Generator as Faker;

$factory->define(sucursal::class, function (Faker $faker) {
    return [
        'nombre' => $faker->company,
        'direccion' => $faker->address,
        'telefono' => $faker->tollFreePhoneNumber
    ];
});
