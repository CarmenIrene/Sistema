<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SecretariaRegistraEmpresa;//aqui va el nombre del modelo

class SecretariaRegistraEmpresaController extends Controller
{
    public function SecretariaRegistraEmpresa(){
    	$RegEmpresa=SecretariaRegistraEmpresa::all();
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('SecretariaRegistraEmpresa')->with('SecretariaRegistraEmpresa',$RegEmpresa); 
    }
}
