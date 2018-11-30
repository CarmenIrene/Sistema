<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'Empresa';
	protected $fillable = [
        'Nombre', 'direccion', 'ramo', 'telefono'
    ];  }
