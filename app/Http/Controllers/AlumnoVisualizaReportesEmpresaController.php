<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\registroAlumno;

class AlumnoVisualizaReportesEmpresaController extends Controller
{
    public function AlumnoVisualizaReportesEmpresa($clave){ //va el nombre de la tabla
    	$AlVisualizaRep=AlumnoVisualizaReportesEmpresa::all(); // va el nombre del controlador
    	$alumno=registroAlumno::where('clave','=',$clave)->first();
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('AlumnoVisualizaReportesEmpresa')->with('alumno',$alumno)->with('AlumnoVisualizaReportesEmpresa', $AlVisualizaRep); //nombre de la vista y nombre de la tabla
    }
}
