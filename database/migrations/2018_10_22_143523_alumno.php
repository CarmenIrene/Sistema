<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alumno extends Migration
{
        public function up()
    {
      Schema::create('Alumno', function (Blueprint $table) {
        /**para crear los datos en la base de datos*/
            $table->increments('idAlumno');            
            $table->integer('clave');
            $table->string('nombre');
            $table->string('password');
            $table->integer('claveIngenieria');
            $table->string('carrera');
            $table->string('ciclo_escolar');
            $table->string('semestre');
            $table->string('condicion');
            $table->string('situacion');
            $table->string('asesor');

            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('Alumno');
    }
}
