<?php

use Illuminate\Database\Seeder;

class PerrosFacturaIngredientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\perro_factura_ingrediente::class,1000)->create();
        $pedidoID = DB::table('perro_factura')->pluck('id');


        foreach ($pedidoID as $id) {
        	$perroID = DB::table('perro_factura')->where('id',$id)->pluck('perro_id');
        	$ingredientesID = DB::table('perro_ingrediente')->where('perro_id',$perroID)->inRandomOrder()->pluck('ingrediente_id');

        	$numeroIngredientes = rand(0,sizeof($ingredientesID));

        	for($i = 0; $i < $numeroIngredientes; $i++){
        		DB::table('perro_factura_ingrediente')->insert([
        			'perro_f_id' => $id, 
        			'ingre_id' => $ingredientesID[$i]
        		]);
        	}

        }
    }
}
