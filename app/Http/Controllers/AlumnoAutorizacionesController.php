<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AlumnoAutorizaciones;//aqui va el nombre del modelo
use App\registroAlumno;

class AlumnoAutorizacionesController extends Controller
{
    public function AlumnoAutorizaciones($clave){
    	$AlAutorizaciones=AlumnoAutorizaciones::all();
    	$alumno=registroAlumno::where('clave','=',$clave)->first();

    	return view('AlumnoAutorizaciones')->with('alumno',$alumno)->with('AlumnoAutorizaciones',$AlAutorizaciones); 
    }
}
