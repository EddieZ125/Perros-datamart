<?php

use Illuminate\Database\Seeder;

class PerrosIngredientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\perro_ingrediente::class,50)->create();
        $perrosID = DB::table('perro')->pluck('id');
        $numeroIngredientes = DB::table('ingrediente')->count();
        foreach ($perrosID as $id) {
        	
        	$ingredientesID = DB::table('ingrediente')->inRandomOrder()->pluck('id');

        	for($i = 0; $i < 5; $i++){
        		if($i <= $numeroIngredientes){
        			DB::table('perro_ingrediente')->insert([
        				'perro_id' => $id,
        				'ingrediente_id' => $ingredientesID[$i]
        			]);	
        		}
        		
        	}
        	
        }
    }
}
