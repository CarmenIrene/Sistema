<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecretariaRegistroEncargadoPracticas extends Model
{
     protected $table = 'RegistroEncargadoPracticas';
	protected $fillable =[//aqui va el nombre de la tabla
        'idRegistroEncargado', 'rpe', 'Nombre', 'Cargo', 'Email'
    ];
}
