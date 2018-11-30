<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EvaluacionEmpresaAlumno;//aqui va el nombre del modelo
use App\registroAlumno;

class EvaluacionEmpresaAlumnoController extends Controller
{
    public function EvaluacionEmpresa($clave){
    	$EEmpresa=EvaluacionEmpresaAlumno::all();
        $alumno=registroAlumno::where('clave','=',$clave)->first();
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('EvaluacionEmpresaAlumno')->with('alumno',$alumno)->with('EvaluacionEmpresaAlumno',$EEmpresa); 
    }
}
