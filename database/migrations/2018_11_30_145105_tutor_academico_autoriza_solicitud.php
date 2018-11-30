<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TutorAcademicoAutorizaSolicitud extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TutorAcademicoAutorizaSolicitud', function (Blueprint $table) {
        /*para crear los datos en la base de datos*/
            $table->increments('idAutorizacion');
            $table->integer('idSolicitudEmpresa');
            $table->integer('claveUnica');
            $table->integer('rpe');
            $table->date('fechaAutorizaAsesor');
            $table->date('fechaAutorizaEncargado');
            $table->string('statusAsesor');
            $table->string('statusEncargado');
            $table->string('statusSecretaria');
            $table->string('comentariosAsesor');
            $table->string('comentariosEncargodo');
            $table->string('comentariosSecretaria');

            $table->timestamps();
        });
       Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TutorAcademicoAutorizaSolicitud');
    }
}
