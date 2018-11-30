<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registroSecretaria extends Model
{
    protected $table = 'secretaria';
	protected $fillable = [
        'idSecretaria', 'rpe', 'nombre',  'password'
    ];  
}
