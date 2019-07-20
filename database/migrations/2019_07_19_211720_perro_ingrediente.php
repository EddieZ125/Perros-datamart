<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PerroIngrediente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perro_ingrediente', function (Blueprint $table){
            $table->unsignedInteger('perro_id');
            $table->unsignedInteger('ingrediente_id');
            $table->primary(['perro_id', 'ingrediente_id']);

            

        });

        Schema::table('perro_ingrediente', function (Blueprint $table){
            $table->foreign('perro_id')->references('id')->on('perro')->onDelete('cascade');
            $table->foreign('ingrediente_id')->references('id')->on('ingrediente')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('perro_ingrediente');
    }
}
