<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registroAsesor extends Model
{
     protected $table = 'asesor';
	protected $fillable = [
        'idAsesorEmpresa', 'clave','nombre', 'cargo' , 'telefono', 'correo', 'tipoAsesor', 'password'
    ]; 
}
