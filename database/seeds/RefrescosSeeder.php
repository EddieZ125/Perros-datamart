<?php

use Illuminate\Database\Seeder;

class RefrescosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\refresco::class,10)->create();
    }
}
