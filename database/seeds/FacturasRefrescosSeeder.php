<?php

use Illuminate\Database\Seeder;

class FacturasRefrescosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\factura_refresco::class, 100)->create();
    }
}
