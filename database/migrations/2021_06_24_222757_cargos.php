<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cargos extends Migration
{
    
    public function up()
    {
        Schema::create('cargos', function (Blueprint $table) {
            $table->increments('idcargo');
            $table->string('cargo', 50);
        });
    }

    public function down()
    {
        Schema::drop('cargos');
    }
}
