<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SecretariaEstadisticasEmpresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SecretariaEstadisticasEmpresa', function (Blueprint $table) {
        /*para crear los datos en la base de datos*/
            $table->increments('idEmpresa');            
            $table->integer('Nombre');
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
        Schema::dropIfExists('SecretariaEstadisticasEmpresa');
    }
}
