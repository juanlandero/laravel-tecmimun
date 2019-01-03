<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pais;

class PaisController extends Controller
{
    //
    public function index(){
        return View("paises.paisesindex");
    }


    public function guardar(Request $request){
        //return $request->all();
        $pais = new Pais;
        $pais->nombre = $request->input('nombre');
        $pais->save();
        return $pais;
    }
}