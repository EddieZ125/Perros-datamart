<?php

use Illuminate\Database\Seeder;

class PerroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\perro::class,20)->create();
    }
}
