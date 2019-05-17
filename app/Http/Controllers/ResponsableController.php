<?php

namespace App\Http\Controllers;
use DB;
use App\Alumno;
use App\Escuela;
use App\Exports\EscuelaExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ResponsableController extends Controller
{
    public function index(){
        $r = request()->user()->email;

        $alumnos = DB::table('alumnos')
                    ->join('paiscomites', 'alumnos.pk_inscripcion', '=', 'paiscomites.id')
                    ->join('comites', 'paiscomites.pk_comite', '=', 'comites.id')
                    ->join('pais', 'paiscomites.pk_pais', '=', 'pais.id')
                    ->leftJoin('escuelas', 'escuelas.id', '=', 'alumnos.pk_escuelas')
                    ->select('alumnos.id',
                            'alumnos.nombre as alumno',
                            'alumnos.mail',
                            'pais.nombre as pais',
                            'escuelas.nombre as escuela',
                            'comites.nombre as comite')
                    ->where('escuelas.email', $r)
                    ->get();

        if ($alumnos->count() != 0) {
            return view('modulos.advisor.index', ['resultado' => true, 'texto' => $alumnos]);
        }else{
            return view('modulos.advisor.index', ['resultado' => false, 'texto' => 'No hay alumnos registrados aun...']);
        }

        //return $r;
        //return view('responsable.index');
    }

    public function getExcelEscuelas(Request $r){
        $email = $r->user()->email;

        $archivo = DB::table('escuelas')->where('escuelas.email', $email)->first();

        return (new EscuelaExport($archivo->id))->download($archivo->nombre.'.xlsx');
    }
}
