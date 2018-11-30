<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SecretariaResBuscarAl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SecretariaResBuscarAl', function (Blueprint $table) {
        /*para crear los datos en la base de datos*/
            $table->increments('claveUnica');            
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
         Schema::dropIfExists('SecretariaResBuscarAl');
    }
}
