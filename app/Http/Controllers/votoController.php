<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Alumno;

class votoController extends Controller
{
    public function form_consulta(){
        return view('home');

    }
    public function consultar(Request $request){
        $nombre = $request->input('cedula_alumno');
        $alum = Alumno::where('cedula_alumno', 'like', $nombre)->first();
        if($alum)
            return view('resultado', compact('alum'));
        else
            return view('mensaje');
        
    }
}
