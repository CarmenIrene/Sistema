<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registroTutorAcademico extends Model
{
     protected $table = 'TutorAcademico';
	protected $fillable = [
        'idTutorAcademico', 'rpe','nombre', 'password'
    ]; 
}
