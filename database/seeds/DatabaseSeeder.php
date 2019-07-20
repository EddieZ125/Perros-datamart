<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(SucursalesSeeder::class);
        $this->call(ClientesSeeder::class);
        $this->call(FacturasSeeder::class);
        $this->call(PerroSeeder::class);
        $this->call(IngredientesSeeder::class);
        $this->call(PerrosIngredientesSeeder::class);
        $this->call(RefrescosSeeder::class);
        $this->call(FacturasRefrescosSeeder::class);
        $this->call(perrosFacturasSeeder::class);
        $this->call(PerrosFacturaIngredientesSeeder::class);

    }
}
