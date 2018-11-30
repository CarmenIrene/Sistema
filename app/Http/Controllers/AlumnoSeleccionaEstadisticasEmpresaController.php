<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AlumnoSeleccionaEstadisticasEmpresa;//aqui va el nombre del modelo
use App\registroAlumno;

class AlumnoSeleccionaEstadisticasEmpresaController extends Controller
{
    public function AlumnoEstadisticasEmpresa($clave){ //va el nombre de la tabla
    	$SeleccEmpEst=AlumnoSeleccionaEstadisticasEmpresa::all(); // va el nombre del controlador
    	$alumno=registroAlumno::where('clave','=',$clave)->first();
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('AlumnoSeleccionaEstadisticasEmpresa')->with('alumno',$alumno)->with('AlumnoEstadisticasEmpresa', $SeleccEmpEst); //nombre de la vista y nombre de la tabla
    }
}

