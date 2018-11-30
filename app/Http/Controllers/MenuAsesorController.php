<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuAsesor;
use App\registroAsesor;

class MenuAsesorController extends Controller
{
     public function MenuAsesor($clave)
    {
    	$asesor=registroAsesor::where('clave','=',$clave)->first();
    	//dd($alumno);

    	// $alumno=registroAlumno::find($clave);
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('MenuAsesor')->with('asesor',$asesor);
    }
}
