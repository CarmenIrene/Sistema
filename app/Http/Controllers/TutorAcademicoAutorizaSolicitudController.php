<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TutorAcademicoAutorizaSolicitud;

class TutorAcademicoAutorizaSolicitudController extends Controller
{
    public function TutorAcademicoAutorizaSolicitud()
    {
    	$AuSolTutor=TutorAcademicoAutorizaSolicitud::all();
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('TutorAcademicoAutorizaSolicitud')->with
    	('TutorAcademicoAutorizaSolicitud',$AuSolTutor);        
    }
}
