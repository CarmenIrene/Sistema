<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportesAlumno extends Model
{
    protected $table = 'reportesalumno';
	protected $fillable = [
        'clave', 'numReporte', 'numReporte', 'fechaInicio', 'fechaFin', 'nombreArchivo'
    ];      
}
