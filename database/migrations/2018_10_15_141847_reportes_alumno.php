<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReportesAlumno extends Migration
{
    public function up()
    {
      Schema::create('ReportesAlumno', function (Blueprint $table) {
        /**para crear los datos en la base de datos*/
            $table->increments('idReporte');
            $table->integer('clave');
            $table->integer('numReporte');
            $table->string('periodo');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->string('nombreArchivo');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ReportesAlumno');
    }
}
