<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\registroAlumno;

class principalController extends Controller
{

    public function principal()
    {
    	$alumno=registroAlumno::all();
    	//dd($alumno);
    	return view('index')->with('alumno',$alumno);
    }
}
