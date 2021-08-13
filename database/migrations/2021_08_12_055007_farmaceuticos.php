<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Farmaceuticos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmaceuticos', function (Blueprint $table) {
            $table->increments('idfarma');
            $table->string("nombre", 255);
            $table->string("codigo", 255);
            $table->date("fecha_llegada");
            $table->date("fecha_caducidad");
            $table->string("cantidad", 255);
            $table->string("tipo_producto", 255);
            $table->string("precio", 255);
            $table->string("descripcion", 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('farmaceuticos');
    }
}
