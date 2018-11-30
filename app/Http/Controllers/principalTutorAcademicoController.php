<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\registroTutorAcademico;

class principalTutorAcademicoController extends Controller
{
    public function principalTutorAcademico()
    {
    	$TutorAcademico=registroTutorAcademico::all();
    	//dd($alumno);
    	return view('index')->with('TutorAcademico',$TutorAcademico);
    }
}
