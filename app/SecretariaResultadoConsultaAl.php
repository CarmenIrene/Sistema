<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecretariaResultadoConsultaAl extends Model
{
      protected $table = 'SecretariaResBuscarAl';
	  protected $fillable =[//aqui va el nombre de la tabla
        'claveUnica', 'Nombre', 'idCarrera'
      ];
}
