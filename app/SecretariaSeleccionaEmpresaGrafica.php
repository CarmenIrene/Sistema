<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecretariaSeleccionaEmpresaGrafica extends Model
{
    protected $table = 'SecretariaEstadisticasEmpresa';
	 protected $fillable =[//aqui va el nombre de la tabla
        'idEmpresa', 'Nombre'
    ];
}
