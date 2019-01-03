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
        return $pais;
    }
}