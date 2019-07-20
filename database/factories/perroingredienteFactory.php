<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\perro_ingrediente;
use Faker\Generator as Faker;

$factory->define(perro_ingrediente::class, function (Faker $faker) {
	$perrosID = DB::table('perro')->pluck('id');
	$ingredientesID = DB::table('ingrediete')->pluck('id');

	$perro = $faker->randomElement($perrosID);
	$ingrediete = $faker->randomElement($ingredientesID);

	return [
        	
    ];	

    
});
