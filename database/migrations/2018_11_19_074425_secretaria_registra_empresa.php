<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SecretariaRegistraEmpresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SecretariaRegistraEmpresa', function (Blueprint $table) {
        /*para crear los datos en la base de datos*/
            $table->increments('idEmpresa');            
            $table->string('nombre');
            $table->string('direccion');
            $table->integer('telefono');
            $table->string('ramo');
            $table->boolean('registrada');  
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
        Schema::dropIfExists('SecretariaRegistraEmpresa');
    }
}
