<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class llenarSolicitud extends Model
{
    protected $table = 'solicitudalumno';
	protected $fillable = [
        'idSolicitud', 'clave', 'Nombre', 'tipoPracticas', 'horaEntrada', 'horaSalida', 'fechaInicio', 'fechaFin', 'nombre_Empresa', 'cargo', 'telefonoEmpresa', 'email', 'direccion', 'asesor', 'telefonoAsesor'
    ];  
}
