<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlumnoSeleccionaReportesEmpresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AlumnoSeleccionaReportesEmpresa', function (Blueprint $table) {
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
        Schema::dropIfExists('AlumnoSeleccionaReportesEmpresa');
    }
}
