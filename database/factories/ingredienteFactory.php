<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\ingrediente;
use Faker\Generator as Faker;

$factory->define(ingrediente::class, function (Faker $faker) {
    return [
        'nombre' => $faker->lastName,
        'costo' => $faker->randomFloat(2,1,50)
    ];
});
