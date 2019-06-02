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
use App\Amonestacion;
use DB;

class DashboardController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('dashboard.comites.dashboard', ['nombre' => Auth::user()->name]);
    }

    public function welcome(){
        return view('dashboard.comites.dash-bienvenida');
    }

    public function checkIn(Request $r){
        $codigo = $r->input('codigo');
        $comite = session('key_comite');

        $verificacion = DB::table('alumnos')
                        ->select('alumnos.id as alumno', 'paiscomites.bandera')
                        ->join('paiscomites', 'alumnos.pk_inscripcion', '=', 'paiscomites.id')
                        ->join('pais', 'paiscomites.pk_pais', '=', 'pais.id')
                        ->where([
                            ['alumnos.codigo', $codigo],
                            ['alumnos.recepcionado', 0],
                            ['paiscomites.pk_comite', $comite]
                        ])
                        ->first();

        if ($verificacion != null) {

            $a = Alumno::where('id', $verificacion->alumno)->first();

            $a->recepcionado = 1;
            $a->save();
            
            return ['estado' => true, 'Text' => 'Si se encontro a la persona', 'bandera' => $verificacion->bandera];
        }else{
            return ['estado' => false, 'Text' => 'No existe el codigo'];
        }
    }

    public function recepcionados(){
        $comite = session('key_comite');

        $delegados_tabla = DB::table('alumnos')
            ->join('paiscomites', 'alumnos.pk_inscripcion', '=', 'paiscomites.id')
            ->join('pais', 'paiscomites.pk_pais', '=', 'pais.id')
            ->join('escuelas', 'alumnos.pk_escuelas', '=', 'escuelas.id')
            ->select('alumnos.nombre as alumno', 'pais.nombre as pais', 'alumnos.codigo', 'escuelas.nombre as escuela', 'alumnos.updated_at as fecha')
            ->where([
                ['paiscomites.pk_comite', $comite],
                ['alumnos.recepcionado', 1]
            ])
            ->orderBy('alumnos.updated_at', 'asc')
            ->get();        

        return view('dashboard.comites.dash-recepcionados', ['delegados' => $delegados_tabla]);
    }

    public function lista(){
        $comite = session('key_comite');

        $listas = DB::table('listas')
            ->select('listas.id', 'listas.nombre as lista', 'listas.created_at')
            ->where('listas.pk_comite', $comite)
            ->get();

        return view('dashboard.comites.dash-lista', ['listas'=>$listas]);
    }

    public function newLista(Request $r){
        $lista = $r->input('nombre');
        $comite = session('key_comite');

        $nuevaLista = new Lista;
        $nuevaLista->nombre = $lista;
        $nuevaLista->pk_comite = $comite;
        $nuevaLista->save();

        return ['estado'=>'true'];
    }


    public function getModalLista(Request $r){
        
        $comite = session('key_comite');
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
                ->select('paiscomites.id as delegacion', 'pais.nombre as pais')
                ->where([
                    ['paiscomites.pk_comite', $comite],
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
        $comite = session('key_comite');

        $paises = DB::table('alumnos')
            ->join('paiscomites', 'alumnos.pk_inscripcion', '=', 'paiscomites.id')
            ->join('pais', 'paiscomites.pk_pais', '=', 'pais.id')
            ->select('alumnos.id as delegacion', 'pais.nombre as pais')
            ->where([
                ['paiscomites.pk_comite', $comite],
                ['alumnos.recepcionado', 1]
            ])
            ->orderBy('pais.nombre', 'asc')
            ->get();
                    
        return view('dashboard.comites.dash-puntos', ['user'=>$paises]);
    }

    public function setPuntos(Request $r){
        $alumno = $r->input('id_alumno');
        $pais = $r->input('pais_name');
        $accion = $r->input('accion');
        $mensaje = "";
        $status = "";

        switch ($accion) {
            case 1:
                $punto = new Punto;
                $punto->pk_alumno = $alumno;
                $punto->pk_comite = session('key_comite');
                $punto->punto = 1;
                $punto->save();
                $mensaje = "<i class='fas fa-plus-circle'></i> ".$pais; 
                $status = "success";
                break;
            case 2:
                $punto = new Punto;
                $punto->pk_alumno = $alumno;
                $punto->pk_comite = session('key_comite');
                $punto->punto = -1;
                $punto->save();
                $mensaje = "<i class='fas fa-minus-circle'></i> ".$pais; 
                $status = "danger";
                break;
            case 3:
                $verbal = new Amonestacion;
                $verbal->pk_alumno = $alumno;
                $verbal->pk_comite = session('key_comite');
                $verbal->amonestacion = 1;
                $verbal->save();
                $mensaje = "<i class='fas fa-bookmark'></i> +1 ".$pais; 
                $status = "warning";
                break;
            case 4:
                $verbal = new Amonestacion;
                $verbal->pk_alumno = $alumno;
                $verbal->pk_comite = session('key_comite');
                $verbal->amonestacion = -1;
                $verbal->save();
                $mensaje = "<i class='fas fa-bookmark'></i> -1 ".$pais; 
                $status = "success";
                break;
            
            default:
                break;
        }
        return ['resultado' => 'true', 'mensaje'=>$mensaje, 'status' => $status];
    }

    public function amonestaciones(){
        $comite = session('key_comite');
        $array_amonestaciones = [];
        $array_verbal = "";

        $paises = DB::table('amonestacion')
            ->join('alumnos', 'amonestacion.pk_alumno', '=', 'alumnos.id')
            ->join('paiscomites', 'alumnos.pk_inscripcion', '=', 'paiscomites.id')
            ->join('pais', 'paiscomites.pk_pais', '=', 'pais.id')
            ->select('pais.nombre AS pais', DB::raw('SUM(amonestacion.amonestacion) AS total'))
            ->where('paiscomites.pk_comite', $comite)
            ->groupBy('pais.id')
            ->orderBy('pais.nombre', 'ASC')
            ->get();

        foreach ($paises as $pais) {
            $i = 0;
            $a_escritas = 0;
            $array_verbal = "";
            $array_escrita = "";

            for ($i; $i < $pais->total ; $i++) { 
                $array_verbal .= '<i class="fas fa-bookmark" style="color: #ffbb33"></i> ';
            }
            if($pais->total >= 3){
                $a_escritas = floor($pais->total/3);

                for ($j=0; $j < $a_escritas; $j++) { 
                    $array_escrita .= '<i class="fas fa-certificate" style="color: #CC0000"></i> ';
                }
            }

            $array_amonestaciones [] = [
                'pais' => $pais->pais,
                'total' => $pais->total,
                'verbal' => $array_verbal,
                'escritas' => $array_escrita,
            ];
        }
        

        return json_encode($array_amonestaciones);
    }

    public function posiciones(){
        return view('dashboard.comites.dash-posiciones');
    }

    public function posicionesTabla(){
        $comite = session('key_comite');

        $tabla = DB::table('alumnos')
            ->join('puntos', 'alumnos.id', '=', 'puntos.pk_alumno')
            ->join('paiscomites', 'alumnos.pk_inscripcion', '=', 'paiscomites.id')
            ->join('pais', 'paiscomites.pk_pais', '=', 'pais.id')
            ->where('puntos.pk_comite', $comite)
            ->select(
                'alumnos.id',
                'alumnos.nombre AS alumno',
                'pais.nombre AS delegacion',
                DB::raw('SUM(puntos.punto) AS total')
            )
            ->groupBy('puntos.pk_alumno')
            ->orderBy('total', 'DESC')
            ->get();
        

        $total_puntos = DB::table('puntos')
            ->join('alumnos', 'alumnos.id', '=', 'puntos.pk_alumno')
            ->join('paiscomites', 'alumnos.pk_inscripcion', '=', 'paiscomites.id')
            ->where('paiscomites.pk_comite', $comite)
            ->sum('puntos.punto');

        $array_posiciones = [];
        
        foreach ($tabla as $value) {
            $array_posiciones[]=[
                'id' => $value->id,
                'alumno' => $value->alumno,
                'delegacion' => $value->delegacion,
                'total' => $value->total
                //'total' => '<progress class="progress is-primary"  value="'.$value->total.'" title="'.$value->total.' de '.$total_puntos.' puntos" max="'.$total_puntos.'"></progress>'
            ];
        }

        return json_encode($array_posiciones);
    }

    public function detalle(){
        $comite = DB::table('comites')
            ->select(
                'comites.id',
                'comites.nombre',
                'idiomas.nombre AS idioma',
                'comites.codigo'
            )
            ->join('idiomas', 'comites.pk_idioma', '=', 'idiomas.id')
            ->where('comites.id', session('key_comite'))
            ->first();
       
        return view('dashboard.comites.dash-detalle', ['comite' => $comite]);
    }

    public function getInfo(){
        $comite = session('key_comite');       

        $paises = DB::table('paiscomites')
            ->leftjoin('alumnos', 'alumnos.pk_inscripcion', '=', 'paiscomites.id')
            ->leftjoin('pais', 'paiscomites.pk_pais', '=', 'pais.id')
            ->leftjoin('escuelas', 'alumnos.pk_escuelas', '=', 'escuelas.id')
            ->select('alumnos.id', 'pais.nombre as pais', 'alumnos.mail', 'alumnos.codigo', 'alumnos.recepcionado', 'escuelas.nombre as escuela')
            ->where('paiscomites.pk_comite', $comite)
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