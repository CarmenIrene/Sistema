<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuAlumno extends Model
{
    protected $table = 'iniciosesion';
	protected $fillable = [
        'clave', 'password'
    ];  
}
