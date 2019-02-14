<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comite;
use DB;

class ComiteController extends Controller
{

    public function indexComite(){
        $comites = Comite::all();
        return view('comite.infoComite', ['comites' => $comites]);
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