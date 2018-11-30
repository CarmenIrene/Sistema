<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlumnoSeleccionaEstadisticasEmpresa extends Model
{
    protected $table = 'AlumnoEstadisticasEmpresa';
	 protected $fillable =[//aqui va el nombre de la tabla
        'idEmpresa', 'Nombre'
    ];
}
