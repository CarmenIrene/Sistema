<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SecretariaSeleccionaEmpresaGrafica;//aqui va el nombre del modelo

class SecretariaSeleccionaEmpresaGraficaController extends Controller
{
    public function SecretariaEstadisticasEmpresa(){ //va el nombre de la tabla
    	$SeleccEmpGra=SecretariaSeleccionaEmpresaGrafica::all(); // va el nombre del controlador
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('SecretariaSeleccionaEmpresaGrafica')->with('SecretariaEstadisticasEmpresa', $SeleccEmpGra); //nombre de la vista y nombre de la tabla
    }
}
