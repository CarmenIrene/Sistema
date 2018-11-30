<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlumnoAutorizaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('AlumnoAutorizaciones', function (Blueprint $table) {
        /**para crear los datos en la base de datos*/
            $table->increments('idAutorizacion');            
            $table->integer('idSolicitudEmpresa');
            $table->string('claveUnica');
            $table->date('fechaAutorizacionAsesor');
            $table->date('fechaAutorizacionEncargado');
            $table->date('fechaAutorizacionSecretaria');
            $table->boolean('statusAsesor');
            $table->boolean('statusEncargado');
            $table->boolean('statusSecretaria');
            $table->string('comentariosAsesor');
            $table->string('comentariosEncargado');
            $table->string('comentariosSecretaria');
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
        Schema::dropIfExists('AlumnoAutorizaciones');
    }
}
