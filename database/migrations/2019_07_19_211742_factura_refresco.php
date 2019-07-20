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
            $table->unsignedInteger('factura_id');
            $table->unsignedInteger('refresco_id');
        });

        Schema::table('factura_refresco', function (Blueprint $table){
            $table->foreign('factura_id')->references('id')->on('factura')->onDelete('cascade');
            $table->foreign('refresco_id')->references('id')->on('refresco')->onDelete('cascade');
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
