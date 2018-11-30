<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecretariaVisualizarConstanciaValidacion extends Model
{
    protected $table = 'SecretariaVisualizarConstancia';
	protected $fillable =[//aqui va el nombre de la tabla
        'claveUnica', 'nombre', 'idCarrera'
    ];
}
