<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlumnoVisualizaReportesEmpresa extends Model
{
     protected $table = 'AlumnoVisualizaReportesEmpresa';
	 protected $fillable =[//aqui va el nombre de la tabla
        'iEmpresa', 'idReporte'
    ];
    //
}
