<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SecretariaAlumnosEnProceso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SecretariaAlumnosEnProceso', function (Blueprint $table) {
        /*para crear los datos en la base de datos*/
            $table->increments('claveUnica');            
            $table->integer('Nombre');
            $table->string('idCarrera');
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
           Schema::dropIfExists('SecretariaAlumnosEnProceso');
    }
}
