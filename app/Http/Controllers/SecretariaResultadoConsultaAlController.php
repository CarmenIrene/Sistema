<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SecretariaResultadoConsultaAl;//aqui va el nombre del modelo
use App\registroAlumno;

class SecretariaResultadoConsultaAlController extends Controller
{
    public function SecretariaResBuscarAl(){
    	$ResConsAlumno=SecretariaResultadoConsultaAl::all();
    	$alumno=registroAlumno::all(); // va el nombre del controlador
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('SecretariaResultadoConsultaAl')->with('alumno',$alumno)->with('SecretariaResultadoConsultaAl', $ResConsAlumno); 
    }
}
