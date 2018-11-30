<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReportesAlumno;
use App\registroAlumno;

class subirReportesAlumnoController extends Controller
{
    public function subirReportes($clave)
    {
        $alumno=registroAlumno::where('clave','=',$clave)->first();
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('subirReportesAlumno')->with('alumno',$alumno);        
    }
    public function GuardaReporte()
    {
        $nombre = request("numReporte");
        $telefonoAlumno = request("telefonoAlumno");
        $tipoPracticas = request("tipoPracticas");
        $horaEntrada = request("horaEntrada");
        $horaSalida = request("horaSalida");
        $fechaInicio = request("fechaInicio");
        $fechaFin = request("fechaFin");
        $nombre_Empresa = request("nombre_Empresa");
        $cargo = request("cargo");
        $telefonoEmpresa = request("telefonoEmpresa");
        $email = request("email");

    	$iS = new SolicitudAlumno();//objeto para meter los valores al objeto
    	$iS->Nombre = $nombre; //igualamos cada dato de la vista obtenido y lo guardamos en el objeto de la base de datos
        $iS->telefonoAlumno = $telefonoAlumno;
        $iS->tipoPracticas = $tipoPracticas;
        $iS->horaEntrada = $horaEntrada;
        $iS->horaSalida = $horaSalida;
        $iS->fechaInicio = $fechaInicio;
        $iS->fechaFin = $fechaFin;
        $iS->nombre_Empresa = $nombre_Empresa;
        $iS->cargo = $cargo;
        $iS->telefonoEmpresa = $telefonoEmpresa;
        $iS->email = $email;


    	$iS->save();//para guardar en la base de datos

    	return redirect('Reportes');//para regresar a la pagina principal
    }
}
