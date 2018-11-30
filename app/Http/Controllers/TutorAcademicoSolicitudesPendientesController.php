<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TutorAcademicoSolicitudesPendientes;//aqui va el nombre del modelo
use App\registroAlumno;

class TutorAcademicoSolicitudesPendientesController extends Controller
{
      public function TutorAcademicoSolicitudesPendientes(){
    	$ResConsAlumno=TutorAcademicoSolicitudesPendientes::all();
    	$alumno=registroAlumno::all(); // va el nombre del controlador
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('TutorAcademicoSolicitudesPendientes')->with('alumno',$alumno)->with('TutorAcademicoSolicitudesPendientes', $ResConsAlumno); 
    }
}
