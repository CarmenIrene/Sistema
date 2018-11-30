<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorAcademico extends Model
{
     protected $table = 'TutorAcademico';
	protected $fillable = [
        'idTutorAcademico','rpe', 'nombre', 'password'
    ];  
}
