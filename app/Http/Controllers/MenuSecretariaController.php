<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuSecretaria;
use App\registroSecretaria;

class MenuSecretariaController extends Controller
{
    public function MenuSecretaria($rpe)
    {
    	$secretaria=registroSecretaria::where('rpe','=',$rpe)->first();
    	//dd($alumno);

    	// $alumno=registroAlumno::find($clave);
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('MenuSecretaria')->with('secretaria',$secretaria);
    }
}
