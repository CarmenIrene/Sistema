<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registroAlumno extends Model
{
    protected $table = 'alumno';
	protected $fillable = [
        'idAlumno', 'clave', 'nombre', 'claveIngenieria', 'password', 'carrera', 'ciclo_escolar', 'semestre', 'condicion', 'situacion', 'asesor'
    ];  
}
