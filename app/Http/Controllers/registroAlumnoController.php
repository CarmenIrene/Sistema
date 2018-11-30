<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\registroAlumno;

class registroAlumnoController extends Controller
{
    public function registroAlumno($idAlumno)
    {
    	$alumno=registroAlumno::find($idAlumno);
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('registroAlumno')->with('registroAlumno',$alumno);
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

    	$alumno->save();//para guardar en la base de datos

    	return redirect('inicioSesion');//para regresar a la pagina principal
    }
}
