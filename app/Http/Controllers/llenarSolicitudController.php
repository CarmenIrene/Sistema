<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\llenarSolicitud;
use App\Empresa;
use App\registroAlumno;

class llenarSolicitudController extends Controller
{
    public function llenarSolicitud($clave)
    {
        $alumno=registroAlumno::where('clave','=',$clave)->first();
        $empresa=Empresa::all();

        // $alumno=registroAlumno::find($clave);
        //dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
        return view('llenarSolicitud')->with('alumno',$alumno)->with('empresa',$empresa);
    }
    public function GuardaSolicitud($clave)
    {
        $alumno=registroAlumno::where('clave','=',$clave)->first();
        //dd($alumno->clave);

        $tipoPracticas = request("tipoPracticas");
        $horaEntrada = request("horaEntrada");
        $horaSalida = request("horaSalida");
        $fechaInicio = request("fechaInicio");
        $fechaFin = request("fechaFin");
        $nombre_Empresa = request("nombre_Empresa");
        $direccion = request("direccion");
        $nombreAsesor = request("nombreAsesor");
        $telefonoAsesor = request("telefonoAsesor");
        $cargo = request("cargo");
        $telefonoEmpresa = request("telefonoEmpresa");
        $email = request("emailAsesor");

    	$iS = new llenarSolicitud();//objeto para meter los valores al objeto

        $iS->clave = $alumno->clave;
        $iS->Nombre = $alumno->nombre;
        $iS->carrera = $alumno->carrera;
        $iS->tipoPracticas = $tipoPracticas;
        $iS->tipoPracticas = $tipoPracticas;
        $iS->horaEntrada = $horaEntrada;
        $iS->horaSalida = $horaSalida;
        $iS->fechaInicio = $fechaInicio;
        $iS->fechaFin = $fechaFin;
        $iS->nombre_Empresa = $nombre_Empresa;
        $iS->direccion = $direccion;
        $iS->asesor = $nombreAsesor;
        $iS->telefonoAsesor = $telefonoAsesor;
        $iS->cargo = $cargo;
        $iS->telefonoEmpresa = $telefonoEmpresa;
        $iS->email = $email;
       // dd($iS->telefonoEmpresa);

    	$iS->save();//para guardar en la base de datos

    	return redirect('subirReportesAlumno/'.$clave);//para regresar a la pagina principal
    }
    public function GuardaEmpresa()
    {
        $nombre = request("nombreEmpresa");
        $direccion = request("direccion");
        $ramo = request("ramo");
        $telefono = request("telefono");

        $empresa = new Empresa();//objeto para meter los valores al objeto
        $empresa->Nombre = $nombre; //igualamos cada dato de la vista obtenido y lo guardamos en el objeto de la base de datos
        $empresa->direccion = $direccion;
        $empresa->ramo = $ramo;
        $empresa->telefono = $telefono;

        $empresa->save();//para guardar en la base de datos

        return redirect('llenarSolicitud');//para regresar a la pagina principal
    }
    public function GuardaEmpresaDireccion()
    {
        $nombre = request("nombreEmpresa");
        $direccion = request("direccion");
        $ramo = request("ramo");
        $telefono = request("telefono");
 
        $empresa = new Empresa();//objeto para meter los valores al objeto
        $empresa->Nombre = $nombre; //igualamos cada dato de la vista obtenido y lo guardamos en el objeto de la base de datos
        $empresa->direccion = $direccion;
        $empresa->ramo = $ramo;
        $empresa->telefono = $telefono;

        $empresa->save();//para guardar en la base de datos

        return redirect('llenarSolicitud');//para regresar a la pagina principal
    }
}
