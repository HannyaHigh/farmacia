<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vendedores extends Migration
{

    public function up()
    {
        Schema::create('vendedores', function (Blueprint $table) {
            $table->increments('idvendedor');
            $table->string('nombre', 50);
            $table->string('app', 50);
            $table->string('apm', 50);
            $table->string('fechanac', 40);
            $table->string('sexo', 5);
            $table->string('email', 50);
            $table->string('contra', 255);

            $table->integer('idcargo')->unsigned();
            $table->foreign('idcargo')->references('idcargo')->on('cargos');

            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('vendedores');
    }
}
