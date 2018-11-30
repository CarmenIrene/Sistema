<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inicioSesion;
use App\registroAlumno;

class inicioSesionController extends Controller
{
    public function inicioSesion()
    {
    	$iS=inicioSesion::all();
        //$alumno=registroAlumno::find($clave);
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('inicioSesion');//->with('inicioSesion',$iS)->with('registroAlumno',$alumno);
    }

    public function GuardaSesion()
    {
        // dd("hola");
        $clave = request("clave");
        $password = request("contrasena");
    	//dd($n);
    	$iS = new inicioSesion();//objeto para meter los valores al objeto
    	$iS->clave = $clave; //igualamos cada dato de la vista obtenido y lo guardamos en el objeto de la base de datos
        $iS->password = $password;

    	$iS->save();//para guardar en la base de datos

// dd($iS);
    	return redirect('/MenuAlumno/'.$clave);//para regresar a la pagina principal
    }
    public function GuardaAlumno()
    {
        $clave = request("clave");
        $nombre = request("nombre");
        $password = request("contrasena");
        $carrera = request("carrera");
        $asesor = request("asesor");
        $claveIngenieria = request("claveIngenieria");
        $cicloEscolar = request("cicloEscolar");
        $semestre = request("semestre");
        $condicion = request("condicion");
        $situacion = request("situacion");
        //dd($n);
        $alumno = new registroAlumno();//objeto para meter los valores al objeto
        $alumno->clave = $clave; //igualamos cada dato de la vista obtenido y lo guardamos en el objeto de la base de datos
        $alumno->nombre = $nombre;
        $alumno->password = $password;
        $alumno->carrera = $carrera;
        $alumno->asesor = $asesor;
        $alumno->claveIngenieria = $claveIngenieria;
        $alumno->cicloEscolar = $cicloEscolar;
        $alumno->semestre = $semestre;
        $alumno->condicion = $condicion;
        $alumno->situacion = $situacion;
        //dd($nombre);
        $alumno->save();//para guardar en la base de datos

        return redirect('inicioSesion');//para regresar a la pagina principal
    }
}