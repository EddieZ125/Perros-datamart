<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\perro_factura;
use Faker\Generator as Faker;

$factory->define(perro_factura::class, function (Faker $faker) {
	$perrosID = DB::table('perro')->pluck('id');
	$facturasID = DB::table('factura')->pluck('id');
    return [
    	'cantidad' => $faker->numberBetween(1,10),
        'perro_id' => $faker->randomElement($perrosID),
        'factura_id' => $faker->randomElement($facturasID)
    ];
});
