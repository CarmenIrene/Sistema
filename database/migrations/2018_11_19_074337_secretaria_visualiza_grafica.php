<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SecretariaVisualizaGrafica extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SecretariaVisualizaGrafica', function (Blueprint $table) {
        /*para crear los datos en la base de datos*/
            $table->increments('idPreguntaAlumno');            
            $table->integer('idEval');
            $table->integer('pregunta');
            $table->integer('respuesta');
          //  $table->string('grafica');

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
         Schema::dropIfExists('SecretariaVisualizaGrafica');
    }
}
