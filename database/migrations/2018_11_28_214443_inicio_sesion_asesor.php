<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InicioSesionAsesor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('InicioSesionAsesor', function (Blueprint $table) {
        /**para crear los datos en la base de datos*/ 
            $table->integer('clave');           
            $table->string('password');
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
        Schema::dropIfExists('InicioSesionAsesor');
    }
}
