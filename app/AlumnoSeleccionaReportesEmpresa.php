<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlumnoSeleccionaReportesEmpresa extends Model
{
     protected $table = 'AlumnoSeleccionaReportesEmpresa';
	 protected $fillable =[//aqui va el nombre de la tabla
        'idEmpresa', 'Nombre'
    ];
}
