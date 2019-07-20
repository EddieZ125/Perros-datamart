<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FacturaRefresco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_refresco', function (Blueprint $table){
            $table->unsignedInteger('id_factura');
            $table->unsignedInteger('id_refresco');
        });

        Schema::table('factura_refresco', function (Blueprint $table){
            $table->foreign('id_factura')->references('id')->on('factura')->onDelete('cascade');
            $table->foreign('id_refresco')->references('id')->on('refresco')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('factura_refresco');
    }
}
