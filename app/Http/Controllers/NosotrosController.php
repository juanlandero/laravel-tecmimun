<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    public function index(){
        return view('nosotros.indexNosotros');
    }

    public function contacto(){
        return view('nosotros.indexContacto');
    }

   
}
