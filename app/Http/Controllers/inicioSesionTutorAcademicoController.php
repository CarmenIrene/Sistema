<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inicioSesionTutorAcademico;
use App\registroTutorAcademico;

class inicioSesionTutorAcademicoController extends Controller
{
     public function inicioSesionTutorAcademico()
    {
    	$iS=inicioSesionTutorAcademico::all();
        //$alumno=registroAlumno::find($clave);
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('inicioSesionTutorAcademico');//->with('inicioSesion',$iS)->with('registroAlumno',$alumno);
    }

    public function GuardaSesionTutorAcademico()
    {
        // dd("hola");
      
        $rpe = request("rpe");
       
        $password = request("contrasena");
    	//dd($n);
    	$iS = new inicioSesionTutorAcademico();//objeto para meter los valores al objeto
    	 //igualamos cada dato de la vista obtenido y lo guardamos en el objeto de la base de datos
        $iS->rpe = $rpe;
    	
        $iS->password = $password;

    	$iS->save();//para guardar en la base de datos

// dd($iS);
    	return redirect('/MenuTutorAcademico/'.$rpe);//para regresar a la pagina principal
    }
    public function GuardaTutorAcademico()
    {
       
        $rpe = request("rpe");
        $password = request("contrasena");
        //dd($n);
        $TutorAcademico = new registroTutorAcademico();//objeto para meter los valores al objeto
       
        $TutorAcademico->rpe = $rpe;
        $TutorAcademico->password = $password;
       
        //dd($nombre);
        $TutorAcademico->save();//para guardar en la base de datos

        return redirect('inicioSesionTutorAcademico');//para regresar a la pagina principal
    }
}
