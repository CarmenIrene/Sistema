<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorAcademicoAutorizaSolicitud extends Model
{
      protected $table = 'TutorAcademicoAutorizaSolicitud';
   	  protected $fillable = [
        'idAutorizaicon', 'idSolicitudEmpresa','claveUnica','rpe','fechaAutorizaAsesor','fechaAutorizaEncargado','statusAsesor','statusEncargado','statusSecretaria','comentariosAsesor','comentariosEncargodo','comentariosSecretaria'
    ];
}
