<?php

use Illuminate\Database\Seeder;

class perrosFacturasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\perro_factura::class,300)->create();
    }
}
