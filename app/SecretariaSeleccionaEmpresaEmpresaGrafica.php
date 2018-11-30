<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecretariaSeleccionaEmpresaEmpresaGrafica extends Model
{
    protected $table = 'SecretariaEstadisticasEmpresa';
	 protected $fillable =[//aqui va el nombre de la tabla
        'idEmpresa', 'Nombre'
    ];
}
