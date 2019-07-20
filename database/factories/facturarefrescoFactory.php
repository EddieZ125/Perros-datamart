<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\factura_refresco;
use Faker\Generator as Faker;

$factory->define(factura_refresco::class, function (Faker $faker) {
	$refrescosID = DB::table('refresco')->pluck('id');
	$facturasID = DB::table('factura')->pluck('id');
    return [
        'factura_id' => $faker->randomElement($facturasID),
        'refresco_id' => $faker->randomElement($refrescosID)
    ];
});
