<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecretariaConsultaAlumno extends Model
{
     protected $table = 'SecretariaConsultaAlumno';
	 protected $fillable =[//aqui va el nombre de la tabla
        'claveUnica', 'Nombre', 'idCarrera'
    ];
}
