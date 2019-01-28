<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumnos;
use DB;

class RegistroController extends Controller
{
    //
    public function index(){
        return view("registro.indexRegistro");
    }


    public function comoRegistrarme(){
        return view('registro.comoRegistrarme');
    }

    public function costos(){
        return view('registro.fechasCostos');
    }


    public function codigo(Request $request){

        $codigo = $request->input('codigo');

        $alumno_datos = DB::table('alumnos')->where('codigo', $codigo)->first();
        return json_encode($alumno_datos);
    }
}
