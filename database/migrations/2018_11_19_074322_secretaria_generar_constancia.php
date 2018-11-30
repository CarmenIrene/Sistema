<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SecretariaGenerarConstancia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SecretariaGenerarConstancia', function (Blueprint $table) {
        /*para crear los datos en la base de datos*/
            $table->increments('claveUnica');            
            $table->string('nombre');
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
        Schema::dropIfExists('SecretariaGenerarConstancia');
    }
}
