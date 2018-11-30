<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlumnoEstadisticasEmpresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          
        Schema::create('AlumnoEstadisticasEmpresa', function (Blueprint $table) {
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
        Schema::dropIfExists('AlumnoEstadisticasEmpresa');
    }
}
