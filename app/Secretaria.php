<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secretaria extends Model
{
    protected $table = 'Secretaria';
	protected $fillable = [
        'idSecretaria','rpe', 'nombre', 'password'
    ];  
}
