<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TutorAcademicoReportesPendientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('TutorAcademicoReportesPendientes', function (Blueprint $table) {
        /*para crear los datos en la base de datos*/
            $table->increments('claveUnica');
            $table->integer('idReporte');            
            $table->string('Nombre');
            $table->integer('idCarrera');
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
        Schema::dropIfExists('TutorAcademicoReportesPendientes');
    }
}
