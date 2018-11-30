<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuTutorAcademico;
use App\registroTutorAcademico;

class MenuTutorAcademicoController extends Controller
{
     public function MenuTutorAcademico($rpe)
    {
    	$TutorAcademico=registroTutorAcademico::where('rpe','=',$rpe)->first();
    	//dd($alumno);

    	// $alumno=registroAlumno::find($clave);
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('MenuTutorAcademico')->with('TutorAcademico',$TutorAcademico);
    }
}
