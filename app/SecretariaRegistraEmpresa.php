<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecretariaRegistraEmpresa extends Model
{
    protected $table = 'SecretariaRegistraEmpresa';
	protected $fillable =[//aqui va el nombre de la tabla
        'idEmpresa', 'nombre', 'direccion', 'telefono','ramo', 'registrada'
    ];
}
