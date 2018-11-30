<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registroTutorAcademicoController extends Controller
{
    public function registroTutorAcademico($idTutorAcademico)
    {
    	$TutorAcademico=registroTutorAcademico::find($idTutorAcademico);
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('registroTutorAcademico')->with('registroTutorAcademico',$TutorAcademico);
    }

    public function GuardaTutorAcademico()
    {
        $rpe = request("rpe");
        $nombre = request("nombre");
        $password = request("contrasena");
       
    	//dd($n);
    	$TutorAcademico = new registroTutorAcademico();//objeto para meter los valores al objeto
    	$TutorAcademico->rpe = $rpe; //igualamos cada dato de la vista obtenido y lo guardamos en el objeto de la base de datos
        $TutorAcademico->nombre = $nombre;
        $TutorAcademico->password = $password;
    

    	$TutorAcademico->save();//para guardar en la base de datos

    	return redirect('inicioSesionTutorAcademico');//para regresar a la pagina principal
    }
}
