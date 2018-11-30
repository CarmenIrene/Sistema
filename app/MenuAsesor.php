<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuAsesor extends Model
{
    protected $table = 'inicioSesionAsesor';
	protected $fillable = [
        'idAsesorEmpresa','clave', 'nombre', 'cargo','telefono','correo','tipoAsesor','password'
    ]; 
}
