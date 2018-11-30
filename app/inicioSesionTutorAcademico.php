<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inicioSesionTutorAcademico extends Model
{
     protected $table = 'inicioSesionTutorAcademico';
		protected $fillable = [
        'rpe','password'
    ]; 
}
