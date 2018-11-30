<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlumnoAutorizaciones extends Model
{
    protected $table = 'AlumnoAutorizaciones';
	protected $fillable = [
        'idAutorizaciones', 'idSolicitudEmpresa', 'claveUnica', 'fechaAutorizacionAsesor',
         'fechaAutorizacionEncargado', 'fechaAutorizacionSecretaria', 'statusAsesor', 
        'statusEncargado', 'statusSecretaria', 'comentariosAsesor', 'comentariosEncargado', 
        'comentariosSecretaria'
    ];  
}
