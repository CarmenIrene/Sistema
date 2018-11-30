<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SecretariaConsAlumnosFinalizaron;//aqui va el nombre del modelo
use App\registroAlumno;

class SecretariaConsAlumnosFinalizaronController extends Controller
{
    public function SecretariaAlumnosFinalizaron(){ //va el nombre de la tabla
    	$AlumnoFin=SecretariaConsAlumnosFinalizaron::all(); // va el nombre del controlador
    	$alumno=registroAlumno::all(); // va el nombre del controlador
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('SecretariaConsAlumnosFinalizaron')->with('alumno',$alumno)->with('SecretariaAlumnosFinalizaron', $AlumnoFin); //nombre de la vista y nombre de la tabla
    }
}
