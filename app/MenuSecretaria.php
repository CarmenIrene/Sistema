<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuSecretaria extends Model
{
    protected $table = 'inicioSesionSecretaria';
	protected $fillable = [
        'rpe', 'password'
    ]; 
}
