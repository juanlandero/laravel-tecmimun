<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comite;
use App\Paiscomites;
use App\Alumno;
use DB;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('dashboard.app');
    }

    public function getPaseLista(){
        $user = Auth::user()->email;

        $paises = DB::table('alumnos')
                    ->join('paiscomites', 'alumnos.pk_inscripcion', '=', 'paiscomites.id')
                    ->join('pais', 'paiscomites.pk_pais', '=', 'pais.id')
                    ->join('comites', 'paiscomites.pk_comite', '=', 'comites.id')
                    ->select('pais.nombre as pais')
                    ->where([
                        ['comites.codigo', $user],
                        ['alumnos.recepcionado', 1]
                        ])
                    ->get();

        return view('dashboard.lista', ['user'=>$paises]);
    }

    public function getPuntos(){
        $user = Auth::user()->email;

        $comite_id = DB::table('comites')
                    ->where('codigo', $user)
                    ->first();

        $paises = DB::table('paiscomites')
                    ->join('pais', 'paiscomites.pk_pais', '=', 'pais.id')
                    ->join('comites', 'paiscomites.pk_comite', '=', 'comites.id')
                    ->select(
                        'pais.nombre as pais',
                        'comites.nombre as comite'
                    )
                    ->where('paiscomites.pk_comite', $comite_id->id)
                    ->get();
                    
        return view('dashboard.puntaje', ['user'=>$paises]);
    }


    public function welcome(){
        return view('dashboard.welcome');
    }

    public function checkIn(Request $r){
        $codigo = $r->input('codigo');

        $verificacion = DB::table('alumnos')
                        ->where([
                            ['codigo', $codigo],
                            ['recepcionado', 0]
                        ])
                        ->first();

        if ($verificacion != null) {

            DB::table('alumnos')
                ->where('id', $verificacion->id)
                ->update(['recepcionado' => 1]);
            
            return ['estado' => true, 'Text' => 'Si se encontro a la persona'];
        }else{
            return ['estado' => false, 'Text' => 'No existe el codigo'];
        }
    }


}
