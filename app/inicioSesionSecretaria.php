<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inicioSesionSecretaria extends Model
{
    protected $table = 'inicioSesionSecretaria';
	protected $fillable = [
        'rpe', 'password'
    ]; 
}
