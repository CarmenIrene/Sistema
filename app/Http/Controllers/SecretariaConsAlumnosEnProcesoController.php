<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SecretariaConsAlumnosEnProceso;//aqui va el nombre del modelo
use App\registroAlumno;

class SecretariaConsAlumnosEnProcesoController extends Controller
{
     public function SecretariaAlumnosEnProceso(){ //va el nombre de la tabla
    	$AlumnoProc=SecretariaConsAlumnosEnProceso::all(); // va el nombre del controlador
    	$alumno=registroAlumno::all();
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('SecretariaConsAlumnosEnProceso')->with('alumno',$alumno)->with('SecretariaAlumnosEnProceso',$AlumnoProc); //nombre de la vista y nombre de la tabla
    }
}
