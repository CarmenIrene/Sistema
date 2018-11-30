<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecretariaConsAlumnosEnProceso extends Model
{
    protected $table = 'SecretariaAlumnosEnProceso';
	protected $fillable =[//aqui va el nombre de la tabla
        'claveUnica', 'Nombre', 'idCarrera'
      ];
}
