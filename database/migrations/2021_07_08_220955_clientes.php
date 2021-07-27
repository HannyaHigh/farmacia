<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clientes extends Migration
{
    
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('idcliente');
            $table->string('nombre', 50);
            $table->string('app', 50);
            $table->string('apm', 50);
            $table->string('sexo', 5);
            $table->string('telefono', 15);
            $table->string('municipio', 150);
            $table->string('calle', 255);
            $table->string('nocalle', 255);
            $table->rememberToken();
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::drop('clientes');
    }
}
