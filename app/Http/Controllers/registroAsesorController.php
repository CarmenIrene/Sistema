<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registroAsesorController extends Controller
{
     public function registroAsesor($idAsesorEmpresa)
    {
    	$asesor=registroAsesor::find($idAsesorEmpresa);
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('registroAsesor')->with('registroAsesor',$asesor);
    }

    public function GuardaAsesor()
    {
      
        $clave = request("clave");
        $nombre = request("nombre");
        $cargo = request("cargo");
        $telefono = request("telefono");
        $correo = request("correo");
        $tipoAsesor = request("tipoAsesor");
        $password = request("contrasena");
       
    	//dd($n);
    	$asesor = new registroAsesor();//objeto para meter los valores al objeto
    	 //igualamos cada dato de la vista obtenido y lo guardamos en el objeto de la base de datos
        $asesor->clave = $clave;
        $asesor->nombre = $nombre;
        $asesor->cargo= $cargo;
        $asesor->telefono = $telefono;
        $asesor->correo = $correo;
        $asesor->tipoAsesor = $tipoAsesor;
        $asesor->password = $password;
    

    	$asesor->save();//para guardar en la base de datos

    	return redirect('inicioSesionAsesor');//para regresar a la pagina principal
    }
}
