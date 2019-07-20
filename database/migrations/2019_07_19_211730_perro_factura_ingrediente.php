<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PerroFacturaIngrediente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perro_factura_ingrediente', function (Blueprint $table){
            $table->unsignedInteger('perro_f_id');
            $table->unsignedInteger('ingre_id');
            $table->primary(['perro_f_id', 'ingre_id']);
        });

        Schema::table('perro_factura_ingrediente', function (Blueprint $table){
            $table->foreign('perro_f_id')->references('id')->on('perro_factura')->onDelete('cascade');
            $table->foreign('ingre_id')->references('id')->on('ingrediente')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('perro_factura_ingrediente');
    }
}
