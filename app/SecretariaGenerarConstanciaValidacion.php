<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecretariaGenerarConstanciaValidacion extends Model
{
    protected $table = 'SecretariaGenerarConstancia';
	protected $fillable =[//aqui va el nombre de la tabla
        'claveUnica', 'nombre', 'idCarrera'
    ];
}
