<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class autorizarSolicitudEncargado extends Model
{
    protected $table = 'autorizacionEncargado';
	protected $fillable = [
        'idAutorizaicon', 'idSolicitudEmpresa','claveUnica','rpe','fechaAutorizaAsesor','fechaAutorizaEncargado','statusAsesor','statusEncargado','statusSecretaria','comentariosAsesor','comentariosEncargodo','comentariosSecretaria'
    ];
}
