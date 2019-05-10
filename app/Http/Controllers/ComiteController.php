<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comite;
use DB;

class ComiteController extends Controller
{

    public function index(){
        if (session('trueClave')) {
            $comites = Comite::all();
            return view('modulos.comite.index-comite', ['comites' => $comites, 'clave' => session('trueClave')]);
        }else{
            return redirect()->route('modulo.antecedentes');
        }
    }
    
    public function premiacion(){
        return view('modulos.comite.criterios');
    }

    
    public function antecedentes(){
        return view('modulos.comite.antecedentes');
    }

    public function verificacion(Request $r){
        $clave = $r->input('clave');

        if ($clave == "mayo-tec2019") {
            session()->flash('trueClave', true);
            return ['resultado' => true, 'text' => 'redireccionar'];
        }else{
            return ['resultado' => false, 'text' => 'Clave incorrecta'];
        }
    }
     
    public function posiciones(){
        return view('modulos.comite.posiciones-oficiales');
    }

    public function recursos(){
        return view('modulos.comite.recursos');
    }
}