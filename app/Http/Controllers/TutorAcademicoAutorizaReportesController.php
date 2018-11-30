<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TutorAcademicoAutorizaReportes;

class TutorAcademicoAutorizaReportesController extends Controller
{
    public function TutorAcademicoAutorizaReportes()
    {
    	$AuRepTutor=TutorAcademicoAutorizaReportes::all();
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('TutorAcademicoAutorizaReportes')->with
    	('TutorAcademicoAutorizaReportes',$AuRepTutor);        
    }
}
