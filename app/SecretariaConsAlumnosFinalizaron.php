<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecretariaConsAlumnosFinalizaron extends Model
{
    protected $table = 'SecretariaAlumnosFinalizaron';
	protected $fillable =[//aqui va el nombre de la tabla
        'claveUnica', 'Nombre', 'idCarrera'
      ];
}
