<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TutorAcademico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('TutorAcademico', function (Blueprint $table) {
        /**para crear los datos en la base de datos*/
            $table->increments('idTutorAcademico');
            $table->integer('rpe');            
            $table->string('nombre');
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
        Schema::dropIfExists('TutorAcademico');
    }
}
