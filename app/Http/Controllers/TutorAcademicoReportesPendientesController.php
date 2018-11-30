<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TutorAcademicoReportesPendientes;//aqui va el nombre del modelo
use App\registroAlumno;


class TutorAcademicoReportesPendientesController extends Controller
{
    public function TutorAcademicoReportesPendientes(){
    	$ResConsAlumno=TutorAcademicoReportesPendientes::all();
    	$alumno=registroAlumno::all(); // va el nombre del controlador
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('TutorAcademicoReportesPendientes')->with('alumno',$alumno)->with('TutorAcademicoReportesPendientes', $ResConsAlumno); 
    }
}
