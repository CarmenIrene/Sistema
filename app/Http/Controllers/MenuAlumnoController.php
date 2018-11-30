<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuAlumno;
use App\registroAlumno;

class MenuAlumnoController extends Controller
{
    public function MenuAlumno($clave)
    {
    	$alumno=registroAlumno::where('clave','=',$clave)->first();
    	//dd($alumno);

    	// $alumno=registroAlumno::find($clave);
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('MenuAlumno')->with('alumno',$alumno);
    }
}
