<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SecretariaRegistroEncargadoPracticas;//aqui va el nombre del modelo

class SecretariaRegistroEncargadoPracticasController extends Controller
{
    public function RegistroEncargadoPracticas(){
    	$RegEncargado=SecretariaRegistroEncargadoPracticas::all();
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('SecretariaRegistroEncargadoPracticas')->with
    	('SecretariaRegistroEncargadoPracticas',$RegEncargado); 
    }
}
