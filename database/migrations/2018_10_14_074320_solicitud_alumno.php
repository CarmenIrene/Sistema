<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SolicitudAlumno extends Migration
{
    public function up()
    {
      Schema::create('solicitudAlumno', function (Blueprint $table) {
        /**para crear los datos en la base de datos*/
            $table->increments('idSolicitud');            
            $table->integer('clave');
            $table->string('Nombre');
            $table->string('carrera');
            $table->string('tipoPracticas');
            $table->time('horaEntrada');
            $table->time('horaSalida');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->string('nombre_Empresa');//se va a tomar de la tabla Empresa
            $table->string('direccion');
            $table->integer('telefonoEmpresa');
            $table->string('asesor');//se va a tomar de la tabla Asesor
            $table->integer('telefonoAsesor')->nullable();
            $table->string('cargo');
            $table->string('email');

            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('solicitudAlumno');
    }
}
