<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\registroAsesor;

class principalAsesorController extends Controller
{
     public function principalAsesor()
    {
    	$asesor=registroAsesor::all();
    	//dd($alumno);
    	return view('index')->with('asesor',$asesor);
    }
}
