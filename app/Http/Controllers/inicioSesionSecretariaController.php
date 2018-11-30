<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inicioSesionSecretaria;
use App\registroSecretaria;

class InicioSesionSecretariaController extends Controller
{
     public function inicioSesionSecretaria()
    {
    	$iS=inicioSesionSecretaria::all();
        //$alumno=registroAlumno::find($clave);
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('inicioSesionSecretaria');//->with('inicioSesion',$iS)->with('registroAlumno',$alumno);
    }

    public function GuardaSesionSecretaria()
    {
        // dd("hola");
        $rpe = request("rpe");
        $password = request("contrasena");
    	//dd($n);
    	$iS = new inicioSesionSecretaria();//objeto para meter los valores al objeto
    	$iS->rpe = $rpe; //igualamos cada dato de la vista obtenido y lo guardamos en el objeto de la base de datos
        $iS->password = $password;

    	$iS->save();//para guardar en la base de datos

// dd($iS);
    	return redirect('/MenuSecretaria/'.$rpe);//para regresar a la pagina principal
    }
    public function GuardaSecretaria()
    {
        $rpe = request("rpe");
        $nombre = request("nombre");
        $password = request("contrasena");
        //dd($n);
        $secretaria = new registroSecretaria();//objeto para meter los valores al objeto
        $secretaria ->rpe = $rpe; //igualamos cada dato de la vista obtenido y lo guardamos en el objeto de la base de datos
        $secretaria ->nombre = $nombre;
        $secretaria ->password = $password;
       
        //dd($nombre);
        $secretaria->save();//para guardar en la base de datos

        return redirect('inicioSesionSecretaria');//para regresar a la pagina principal
    }
}
