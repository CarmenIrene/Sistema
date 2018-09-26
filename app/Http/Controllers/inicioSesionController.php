<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inicioSesion;

class inicioSesionController extends Controller
{
    public function inicioSesion()
    {
    	$iS=inicioSesion::all();
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('inicioSesion')->with('inicioSesion',$iS);
    }

    public function GuardaPeticion()
    {
        $clave = request("clave");
        $password = request("contrasena");
    	//dd($n);
    	$iS = new inicioSesion();//objeto para meter los valores al objeto
    	$iS->clave = $clave; //igualamos cada dato de la vista obtenido y lo guardamos en el objeto de la base de datos
        $iS->password = $password;


    	$iS->save();//para guardar en la base de datos

    	return redirect('inicioSesion');//para regresar a la pagina principal
    }