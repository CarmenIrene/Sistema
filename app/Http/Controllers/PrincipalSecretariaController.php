<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\registroSecretaria;

class PrincipalSecretariaController extends Controller
{
     public function PrincipalSecretaria()
    {
    	$secretaria=registroSecretaria::all();
    	//dd($alumno);
    	return view('index')->with('secretaria',$secretaria);
    }
}
