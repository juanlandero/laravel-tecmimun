<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    public function nosotros(){
        return view('modulos.nosotros.nosotros');
    }

    public function contacto(){
        return view('modulos.nosotros.contacto');
    }
}
