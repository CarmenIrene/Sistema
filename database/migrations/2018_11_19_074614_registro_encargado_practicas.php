<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RegistroEncargadoPracticas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RegistroEncargadoPracticas', function (Blueprint $table) {
        /*para crear los datos en la base de datos*/
            $table->increments('idRegistroEncargado');            
            $table->integer('rpe');
            $table->string('Nombre');
            $table->integer('Cargo');
           // $table->integer('Carrera');
            $table->string('correo');

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
         Schema::dropIfExists('egistroEncargadoPracticas');
    }
}
