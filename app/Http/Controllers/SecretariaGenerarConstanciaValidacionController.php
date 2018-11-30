<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SecretariaGenerarConstanciaValidacion;//aqui va el nombre del modelo
use App\registroAlumno;

class SecretariaGenerarConstanciaValidacionController extends Controller
{
     public function SecretariaGenerarConstancia(){ //va el nombre de la tabla
    	$GenerarConst=SecretariaGenerarConstanciaValidacion::all(); // va el nombre del controlador
    	$alumno=registroAlumno::all(); // va el nombre del controlador
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('SecretariaGenerarConstanciaValidacion')->with('alumno',$alumno)->with('SecretariaGenerarConstancia', $GenerarConst); //nombre de la vista y nombre de la tabla
    }
}
