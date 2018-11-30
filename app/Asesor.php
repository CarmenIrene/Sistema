<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asesor extends Model
{
     protected $table = 'Asesor';
	protected $fillable = [
        'idAsesorEmpresa', 'clave','nombre', 'cargo','telefono','correo','tipoAsesor','password'
    ];  
}
