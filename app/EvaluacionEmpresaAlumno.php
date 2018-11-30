<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvaluacionEmpresaAlumno extends Model
{
     protected $table = 'EvaluacionEmpresa';
	protected $fillable =[//aqui va el nombre de la tabla
        'idPreguntaEmpresa', 'idEval', 'pregunta', 'respuesta', 'grafica'
    ];
}
