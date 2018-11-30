<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EvaluacionAlumnoEmpresa;//aqui va el nombre del modelo
use App\registroAlumno;

class EvaluacionAlumnoEmpresaController extends Controller
{
    public function EvaluacionAlumno($clave){
    	$EAlumno=EvaluacionAlumnoEmpresa::all();
        $alumno=registroAlumno::where('clave','=',$clave)->first();
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('EvaluacionAlumnoEmpresa')->with('alumno',$alumno)->with('EvaluacionAlumnoEmpresa',$EAlumno); 
    }
}
