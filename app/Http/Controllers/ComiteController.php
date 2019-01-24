<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comite;

class ComiteController extends Controller
{
    //
    public function index(){
        return view('comite.indexComite');
    }


    public function guardar(Request $request){
        $comite = new Comite;
        $comite->nombre = $request->input('nombre');
        $comite->save();
        return $comite;
    }

    public function indexComite(){
        return view('comite.infoComite');
    }

    public function recursos(){
        return view('comite.recursos');
    }

    public function criterios(){
        return view('comite.criterios');
    }

    public function antecedentes(){
        return view('comite.antecedentes');
    }

    public function posiciones(){
        return view('comite.posicionesOficiales');
    }
}