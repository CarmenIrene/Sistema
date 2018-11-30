<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecretariaVisualizaEmpresaGrafica extends Model
{
    protected $table = 'SecretariaVisualizaGrafica';
	protected $fillable =[//aqui va el nombre de la tabla
        'idPreguntaAlumno', 'idEval', 'pregunta', 'respuesta', 'grafica'
    ];
}
