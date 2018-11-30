<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvaluacionAlumnoEmpresa extends Model
{
 protected $table = 'EvaluacionAlumno';
	protected $fillable =[//aqui va el nombre de la tabla
        'idPreguntaAlumno', 'idEval', 'pregunta', 'respuesta', 'grafica'
    ];
}
