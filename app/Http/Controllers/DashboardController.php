<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comite;
use App\Paiscomites;
use App\Alumno;
use App\Lista;
use App\Pase;
use App\Punto;
use DB;

class DashboardController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('dashboard.comites.dashboard');
    }

    public function checkIn(Request $r){
        $codigo = $r->input('codigo');
        $comite = $r->input('comite');

        $verificacion = DB::table('alumnos')
                        ->select('alumnos.id as alumno')
                        ->join('paiscomites', 'alumnos.pk_inscripcion', '=', 'paiscomites.id')
                        ->join('comites', 'paiscomites.pk_comite', '=', 'comites.id')
                        ->where([
                            ['alumnos.codigo', $codigo],
                            ['alumnos.recepcionado', 0],
                            ['comites.codigo', $comite]
                        ])
                        ->first();

        if ($verificacion != null) {

            DB::table('alumnos')
                ->where('id', $verificacion->alumno)
                ->update(['recepcionado' => 1]);
            
            return ['estado' => true, 'Text' => 'Si se encontro a la persona'];
        }else{
            return ['estado' => false, 'Text' => 'No existe el codigo'];
        }
    }

    public function welcome(){
        return view('dashboard.comites.dash-bienvenida');
    }

    public function lista(){
        $user = Auth::user()->email;

        $listas = DB::table('listas')
            ->select('listas.id', 'listas.nombre as lista', 'listas.created_at')
            ->join('comites', 'listas.pk_comite', '=', 'comites.id')
            ->where('comites.codigo', $user)
            ->get();

        return view('dashboard.comites.dash-lista', ['listas'=>$listas]);
    }

    public function newLista(Request $r){

        $lista = $r->input('nombre');
        $email = $r->input('comite');

        $comite = DB::table('comites')
            ->where('codigo', $email)
            ->first();

        $nuevaLista = new Lista;
        $nuevaLista->nombre = $lista;
        $nuevaLista->pk_comite = $comite->id;
        $nuevaLista->save();

        return ['estado'=>'true'];
    }


    public function getModalLista(Request $r){
        
        $user = Auth::user()->email;
        $id_lista = $r->input('lista');
        $items = "";

        $pase = DB::table('pases')
            ->where('pk_lista', $id_lista)
            ->get();

        if ($pase->count() > 0) {

            $paises = DB::table('pases')
                ->join('paiscomites', 'pases.pk_paiscomite', '=', 'paiscomites.id')
                ->join('pais', 'paiscomites.pk_pais', '=', 'pais.id')
                ->select('paiscomites.id as delegacion', 'pais.nombre as pais', 'pases.pk_lista as lista', 'pases.asistencia')
                ->where('pases.pk_lista', $id_lista)
                ->orderBy('pais.nombre', 'asc')
                ->get();
                foreach ($paises as $pais) {
                    if ($pais->asistencia == 1) {
                        $items .= "<div class='box presente'><div class='columns is-vcentered'>".
                        "<div class='column'>".$pais->pais."</div>".
                            "</div></div>";
                    }elseif($pais->asistencia == 0 && $pais->asistencia != null){
                        $items .= "<div class='box ausente'><div class='columns is-vcentered'>".
                        "<div class='column'>".$pais->pais."</div>".
                            "</div></div>";
                    }else{
                        $items .= "<div class='box' id='".$pais->delegacion."'><div class='columns is-mobile is-vcentered'>".
                        "<div class='column is-4-mobile is-8-desktop'>".$pais->pais."</div>".
                            "<div class='column is-4-mobile is-2-desktop'>".
                                "<button onclick='estadoAlumno(".$pais->delegacion.", 1, ".$id_lista.")' class='button is-primary is-inverted is-rounded'>Presente</button>".
                            "</div><div class='column is-4-mobile is-2-desktop'>".
                                "<button onclick='estadoAlumno(".$pais->delegacion.", 0, ".$id_lista.")' class='button is-danger is-inverted is-rounded'>Ausente</button>".
                            "</div></div></div>";
                    }
                }
            return ['paises' => $items];
        }else{
            $paises = DB::table('alumnos')
                ->join('paiscomites', 'alumnos.pk_inscripcion', '=', 'paiscomites.id')
                ->join('pais', 'paiscomites.pk_pais', '=', 'pais.id')
                ->join('comites', 'paiscomites.pk_comite', '=', 'comites.id')
                ->select('paiscomites.id as delegacion', 'pais.nombre as pais')
                ->where([
                    ['comites.codigo', $user],
                    ['alumnos.recepcionado', 1]
                ])
                ->orderBy('pais.nombre', 'asc')
                ->get();

            if ($paises->count() != 0) {
                foreach ($paises as $pais) {

                    $nuevo = new Pase;
                    $nuevo->pk_paiscomite = $pais->delegacion;
                    $nuevo->pk_lista = $id_lista;
                    $nuevo->asistencia = null;
                    $nuevo->save();

                    $items .= "<div class='box' id='".$pais->delegacion."'><div class='columns is-mobile is-vcentered'>".
                    "<div class='column is-4-mobile is-8-desktop'>".$pais->pais."</div>".
                        "<div class='column is-4-mobile is-2-desktop'>".
                            "<button onclick='estadoAlumno(".$pais->delegacion.", 1, ".$id_lista.")' class='button is-primary is-inverted is-rounded'>Presente</button>".
                        "</div><div class='column is-4-mobile is-2-desktop'>".
                            "<button onclick='estadoAlumno(".$pais->delegacion.", 0, ".$id_lista.")' class='button is-danger is-inverted is-rounded'>Ausente</button>".
                        "</div></div></div>";
                }
                return ['paises'=>$items];
            }else{
                return [
                    'resultado'=>true,
                    'texto'=>'Debe recepcionar a los alumnos para poder realizar un pase de lista.'
                ];
            }
        }
    }

    public function estadoEnLista(Request $r){
        $delegacion = $r->input('delegacion');
        $lista = $r->input('lista');
        $estado = $r->input('estado');
    
        DB::table('pases')
            ->where([
                ['pk_paiscomite', $delegacion],
                ['pk_lista', $lista]
            ])
            ->update(['asistencia' => $estado]);
    
        if ($estado == 1) {
            return ['asistencia' => true, 'delegacion'=>$delegacion];
        }else{
            return ['asistencia' => false, 'delegacion'=>$delegacion];
        }
    }

    public function puntos(){
        $user = Auth::user()->email;

        $paises = DB::table('alumnos')
            ->join('paiscomites', 'alumnos.pk_inscripcion', '=', 'paiscomites.id')
            ->join('pais', 'paiscomites.pk_pais', '=', 'pais.id')
            ->join('comites', 'paiscomites.pk_comite', '=', 'comites.id')
            ->select('alumnos.id as delegacion', 'pais.nombre as pais')
            ->where([
                ['comites.codigo', $user],
                ['alumnos.recepcionado', 1]
            ])
            ->orderBy('pais.nombre', 'asc')
            ->get();
                    
        return view('dashboard.comites.dash-puntos', ['user'=>$paises]);
    }

    public function setPuntos(Request $r){

        $alumno = $r->input('id_alumno');
        $pais = $r->input('pais_name');

        $punto = new Punto;
        $punto->pk_alumno = $alumno;
        $punto->punto = 1;
        $punto->save();

        return ['resultado' => 'true', 'pais'=>$pais];
    }

    public function detalle(){
        $user = Auth::user()->email;        
        $comite = DB::table('comites')->where('codigo', $user)->first();

        return view('dashboard.comites.dash-detalle', ['comite' => $comite]);
    }

    public function getInfo(){
        
        $user = Auth::user()->email;        

        $paises = DB::table('alumnos')
            ->join('paiscomites', 'alumnos.pk_inscripcion', '=', 'paiscomites.id')
            ->join('pais', 'paiscomites.pk_pais', '=', 'pais.id')
            ->join('comites', 'paiscomites.pk_comite', '=', 'comites.id')
            ->join('escuelas', 'alumnos.pk_escuelas', '=', 'escuelas.id')
            ->select('alumnos.id', 'pais.nombre as pais', 'alumnos.mail', 'alumnos.codigo', 'alumnos.recepcionado', 'escuelas.nombre as escuela')
            ->where('comites.codigo', $user)
            ->orderBy('pais.nombre', 'asc')
            ->get();

        $array_detalle = [];

        foreach ($paises as $value) {
            $recepcionado = "";
            if ($value->recepcionado == 1) {
                $recepcionado = '<span style="color: #46a14a"><i class="fas fa-check-circle"></i></span>';
            }else{
                $recepcionado = '<span style="color: #ff3860"><i class="fas fa-times-circle"></i></span>';
            }
            
            $array_detalle [] = [
                'id' => $value->id,
                'pais' => $value->pais,
                'mail' => $value->mail,
                'codigo' => $value->codigo,
                'recepcionado' => $recepcionado,
                'escuela' => $value->escuela,
            ];
        }

        return json_encode($array_detalle);
    }
}