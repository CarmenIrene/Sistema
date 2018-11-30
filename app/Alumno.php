<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'Alumno';
	protected $fillable = [
        'clave', 'nombre', 'claveIngenieria', 'carrera', 'asesor', 'ciclo_escolar', 'semestre', 'password'
    ];  
}
