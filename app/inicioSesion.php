<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inicioSesion extends Model
{
    protected $table = 'iniciosesion';
	protected $fillable = [
        'clave', 'password'
    ];  
}
