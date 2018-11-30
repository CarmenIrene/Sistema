<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inicioSesionAsesor;
use App\registroAsesor;

class inicioSesionAsesorController extends Controller
{
     public function inicioSesionAsesor()
    {
    	$iS=inicioSesionAsesor::all();
        //$alumno=registroAlumno::find($clave);
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('inicioSesionAsesor');//->with('inicioSesion',$iS)->with('registroAlumno',$alumno);
    }

    public function GuardaSesionAsesor()
    {
        // dd("hola");
      
        $clave = request("clave");
       
        $password = request("contrasena");
    	//dd($n);
    	$iS = new inicioSesionAsesor();//objeto para meter los valores al objeto
    	 //igualamos cada dato de la vista obtenido y lo guardamos en el objeto de la base de datos
        $iS->clave = $clave;
    	
        $iS->password = $password;

    	$iS->save();//para guardar en la base de datos

// dd($iS);
    	return redirect('/MenuAsesor/'.$clave);//para regresar a la pagina principal
    }
    public function GuardaAsesor()
    {
       
        $clave = request("clave");
        $password = request("contrasena");
        //dd($n);
        $asesor = new registroAsesor();//objeto para meter los valores al objeto
       
        $asesor->clave = $clave;
        $asesor->password = $password;
       
        //dd($nombre);
        $asesor->save();//para guardar en la base de datos

        return redirect('inicioSesionAsesor');//para regresar a la pagina principal
    }
}
