<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AlumnoSeleccionaReportesEmpresa;//aqui va el nombre del modelo
use App\registroAlumno;

class AlumnoSeleccionaReportesEmpresaController extends Controller
{
    public function AlumnoSeleccionaReportesEmpresa($clave){ //va el nombre de la tabla
    	$AlSeleccRep=AlumnoSeleccionaReportesEmpresa::all(); // va el nombre del controlador
    	$alumno=registroAlumno::where('clave','=',$clave)->first();
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('AlumnoSeleccionaReportesEmpresa')->with('alumno',$alumno)->with('AlumnoSeleccionaReportesEmpresa',
    	$AlSeleccRep); //nombre de la vista y nombre de la tabla
    }
}
