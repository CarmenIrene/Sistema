<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SecretariaVisualizaEmpresaGrafica;//aqui va el nombre del modelo

class SecretariaVisualizaEmpresaGraficaController extends Controller
{
     public function SecretariaVisualizaGrafica(){ //va el nombre de la tabla
    	$VisualizaGra=SecretariaVisualizaEmpresaGrafica::all(); // va el nombre del controlador
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('SecretariaVisualizaEmpresaGrafica')->with('SecretariaVisualizaGrafica', $VisualizaGra); //nombre de la vista y nombre de la tabla
    }
}
