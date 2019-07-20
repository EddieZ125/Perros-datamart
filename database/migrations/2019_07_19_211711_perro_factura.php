<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PerroFactura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perro_factura', function (Blueprint $table){
            $table->increments('id');
            $table->integer('cantidad');
            $table->unsignedInteger('perro_id');
            $table->unsignedInteger('factura_id');
        });

        Schema::table('perro_factura', function (Blueprint $table){
            $table->foreign('perro_id')->references('id')->on('perro')->onDelete('cascade');
            $table->foreign('factura_id')->references('id')->on('factura')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('perro_factura');
    }
}
