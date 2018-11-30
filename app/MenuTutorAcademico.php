<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuTutorAcademico extends Model
{
    protected $table = 'inicioSesionTutorAcademico';
	protected $fillable = [
        'rpe', 'nombre', 'password'
    ]; 
}
