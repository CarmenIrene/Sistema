<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registroSecretariaController extends Controller
{
    public function registroSecretaria($idSecretaria)
    {
    	$alumno=registroSecretaria::find($idSecretaria);
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('registroSecretaria')->with('registroSecretaria',$secretaria);
    }

    public function GuardaSecretaria()
    {
        $rpe = request("rpe");
        $nombre = request("nombre");
        $password = request("contrasena");
       
    	//dd($n);
    	$secretaria = new registroSecretaria();//objeto para meter los valores al objeto
    	$secretaria->rpe = $rpe; //igualamos cada dato de la vista obtenido y lo guardamos en el objeto de la base de datos
        $secretaria->nombre = $nombre;
        $secretaria->password = $password;
    

    	$secretaria->save();//para guardar en la base de datos

    	return redirect('inicioSesionSecretaria');//para regresar a la pagina principal
    }
}
