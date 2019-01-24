<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
