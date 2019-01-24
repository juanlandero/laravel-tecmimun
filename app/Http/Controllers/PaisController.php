<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pais;

class PaisController extends Controller
{
    //
    public function index(){
        $paises = Pais::all();//where('id', 1);
        return View("paises.paisesIndex", ['paises' => $paises]);
    }


    public function guardar(Request $request){
        $pais = new Pais;
        $pais->nombre = $request->input('nombre');
        $pais->save();
        return null;
    }

    public function getComites(Request $request){
        return $request->all();
    }
}