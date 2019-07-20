<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\cliente;
use Faker\Generator as Faker;

$factory->define(cliente::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'direccion' => $faker->address,
        'telefono' => $faker->tollFreePhoneNumber
    ];
});
