<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AlumnoVisualizaEstadisticasEmpresa;//aqui va el nombre del modelo
use App\registroAlumno;

class AlumnoVisualizaEstadisticasEmpresaController extends Controller
{
     public function AlumnoVisualizaEstadisticas($clave){ //va el nombre de la tabla
    	$VisualizaEst=AlumnoVisualizaEstadisticasEmpresa::all(); // va el nombre del controlador
    	$alumno=registroAlumno::where('clave','=',$clave)->first();

    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('AlumnoVisualizaEstadisticasEmpresa')->with('alumno',$alumno)->with('AlumnoVisualizaEstadisticas', $VisualizaEst); //nombre de la vista y nombre de la tabla
    }
}
