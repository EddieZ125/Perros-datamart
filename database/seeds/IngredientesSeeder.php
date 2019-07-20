<?php

use Illuminate\Database\Seeder;

class IngredientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ingrediente::class, 20)->create();
    }
}
