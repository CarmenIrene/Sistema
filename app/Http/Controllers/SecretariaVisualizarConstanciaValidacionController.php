<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SecretariaVisualizarConstanciaValidacion;//aqui va el nombre del modelo

class SecretariaVisualizarConstanciaValidacionController extends Controller
{
     public function SecretariaVisualizarConstancia(){ //va el nombre de la tabla
    	$VisualizarConst=SecretariaVisualizarConstanciaValidacion::all(); // va el nombre del controlador
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('SecretariaVisualizarConstanciaValidacion')->with('SecretariaVisualizarConstancia', $VisualizarConst); //nombre de la vista y nombre de la tabla
    }
}
