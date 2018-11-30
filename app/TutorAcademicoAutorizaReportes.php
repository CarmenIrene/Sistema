<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorAcademicoAutorizaReportes extends Model
{
     protected $table = 'TutorAcademicoAutorizaReportes';
   	  protected $fillable = [
        'idAutorizaicon', 'idSolicitudEmpresa','claveUnica','rpe','fechaAutorizaAsesor','fechaAutorizaEncargado','statusAsesor','statusEncargado','statusSecretaria','comentariosAsesor','comentariosEncargodo','comentariosSecretaria'
    ];
}
