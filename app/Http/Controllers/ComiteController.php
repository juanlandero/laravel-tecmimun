<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comite;
use DB;

class ComiteController extends Controller
{

    public function index(){
        $comites = Comite::all();
        return view('modulos.comite.index-comite', ['comites' => $comites]);
    }
    
    public function premiacion(){
        return view('modulos.comite.criterios');
    }

    
    public function antecedentes(){
        return view('modulos.comite.antecedentes');
    }
     
    public function posiciones(){
        return view('modulos.comite.posiciones-oficiales');
    }

    public function recursos(){
        return view('modulos.comite.recursos');
    }
}