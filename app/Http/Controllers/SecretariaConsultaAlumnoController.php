<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SecretariaConsultaAlumno;//aqui va el nombre del modelo
use App\registroAlumno;

class SecretariaConsultaAlumnoController extends Controller
{
     public function SecretariaConsultaAlumno(){
    	$ConsAlumno=SecretariaConsultaAlumno::all();
    	$alumno=registroAlumno::all(); // va el nombre del controlador
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('SecretariaConsultaAlumno')->with('alumno',$alumno)->with('SecretariaConsultaAlumno',$ConsAlumno); 
    }
}
