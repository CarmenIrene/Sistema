<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlumnoVisualizaEstadisticas extends Model
{
    protected $table = 'AlumnoVisualizaEstadisticas';
	protected $fillable =[//aqui va el nombre de la tabla
        'idPreguntaEmpresa', 'idEval', 'pregunta', 'respuesta', 'grafica'
    ];
}
