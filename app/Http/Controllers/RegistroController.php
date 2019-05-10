<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Alumno;
use App\Comite;
use App\Escuela;
use App\Mail\Alumnos;
use DB;

class RegistroController extends Controller
{
    
    public function registro(){
        return view('modulos.registro.registro');
    }

    public function completo(){
        $comites = Comite::all();
        $escuelas = Escuela::all();
        return view("modulos.registro.registro-completo", ['comites'=>$comites, 'escuelas'=>$escuelas]);
    }  
    
    public function getPaises(Request $request){
        $comite = $request->input('comite');
        $paises = DB::table('paiscomites')
                ->join('pais', 'paiscomites.pk_pais', '=', 'pais.id')
                ->select('paiscomites.pk_pais as id', 'pais.nombre as pais')
                ->where([
                    ['paiscomites.pk_comite', $comite],
                    ['paiscomites.disponible', 1]
                    ])
                ->get();
        
       return $paises;
    }



    public function registrarCodigo(){
        return view('modulos.registro.registro-codigo');
    }

    public function verificarCodigo(Request $request){
        $hasCodigo = "";
        $hasCodigo .= $request->input('codigo');

        if ($hasCodigo != null) {
            $alumno_datos = DB::table('alumnos')->where('codigo', $hasCodigo)->first();
            
            if ($alumno_datos != null && $alumno_datos->nombre == "") {
                session()->flash('hasCodigo', $hasCodigo);
                return [
                    'resultado' => true,
                    'texto' => 'finalizar/'.$hasCodigo,
                    'alumno'=> $alumno_datos
                ];
            }else{
                return [
                    'resultado' => false,
                    'texto' => 'El código no es válido'
                ];
            }
        }else{
            return [
                'resultado' => false,
                'texto'=>'Debes introducir un código.'
            ];
        }
    }

    public function finalizarRegistro($codigo){

        if (session('hasCodigo') == $codigo) {
            $alumnos = DB::table('alumnos')
                ->join('escuelas', 'escuelas.id', '=', 'alumnos.pk_escuelas')
                ->join('paiscomites', 'alumnos.pk_inscripcion', '=', 'paiscomites.id')
                ->join('comites', 'paiscomites.pk_comite', '=', 'comites.id')
                ->join('pais', 'paiscomites.pk_pais', '=', 'pais.id')
                ->select(
                    'alumnos.id',
                    'alumnos.pk_escuelas',
                    'alumnos.codigo',
                    'escuelas.nombre as escuela',
                    'paiscomites.pk_comite',
                    'comites.nombre as comite',
                    'paiscomites.pk_pais',
                    'pais.nombre as pais'
                    )
                ->where([
                    ['alumnos.codigo', $codigo]
                ])
                ->first();

            return view("modulos.registro.registro-completo", ['d'=>$alumnos]);
        }else{
            return redirect()->route('modulo.codigo');
        }
        
    }



    public function guardarAlumno(Request $request){
        $codigo = $request->input('codigo');

        if (!$codigo) {

            $paiscomite = DB::table('paiscomites')
                ->where([
                    ['pk_comite', $request->input('id_comite')],
                    ['pk_pais', $request->input('id_pais')]
                ])
                ->select('paiscomites.id')
                ->first();

            $codigo = str_random(5);
            while (DB::table('alumnos')->where('codigo', $codigo)->first()) {
                $codigo = str_random(5);
            }

            $nuevo = new Alumno;
            $nuevo->nombre = $request->input('nombre');
            $nuevo->edad = $request->input('edad');
            $nuevo->mail = $request->input('email');
            $nuevo->codigo = $codigo;
            $nuevo->recepcionado = false;
            $nuevo->pk_escuelas = $request->input('id_escuela');
            $nuevo->pk_inscripcion = $paiscomite->id;
            $nuevo->save();

            DB::table('paiscomites')
                ->where('id', $paiscomite->id)
                ->update(['disponible' => 0]);
        }else{
            
            $id = $request->input('id');

            DB::table('alumnos')
                ->where([
                    ['codigo', $codigo],
                    ['id', $id]
                ])
                ->update(
                    [
                        'nombre'        =>  $request->input('nombre'),
                        'edad'          =>  $request->input('edad'),
                        'mail'          =>  $request->input('email')
                    ]
                );
        }

        $alumno = DB::table('alumnos')
            ->join('escuelas', 'escuelas.id', '=', 'alumnos.pk_escuelas')
            ->join('paiscomites', 'alumnos.pk_inscripcion', '=', 'paiscomites.id')
            ->join('comites', 'paiscomites.pk_comite', '=', 'comites.id')
            ->join('pais', 'paiscomites.pk_pais', '=', 'pais.id')
            ->select(
                'alumnos.id',
                'alumnos.nombre',
                'alumnos.mail as email',
                'alumnos.pk_escuelas',
                'alumnos.codigo',
                'escuelas.nombre as escuela',
                'comites.nombre as comite',
                'pais.nombre as pais'
                )
            ->where('alumnos.codigo', $codigo)
            ->first();


        return view('modulos.registro.confirmacion', ['alumno'=>$alumno]);
    }

    public function sendMail(Request $r){
        $codigo = $r->input('codigo');
        $alumno = DB::table('alumnos')
            ->join('escuelas', 'escuelas.id', '=', 'alumnos.pk_escuelas')
            ->join('paiscomites', 'alumnos.pk_inscripcion', '=', 'paiscomites.id')
            ->join('comites', 'paiscomites.pk_comite', '=', 'comites.id')
            ->join('pais', 'paiscomites.pk_pais', '=', 'pais.id')
            ->select(
                'alumnos.id',
                'alumnos.nombre',
                'alumnos.mail as email',
                'alumnos.pk_escuelas',
                'alumnos.codigo',
                'escuelas.nombre as escuela',
                'comites.nombre as comite',
                'pais.nombre as pais'
                )
            ->where('alumnos.codigo', $codigo)
            ->first();


       Mail::to($r->input('email'))->send(new Alumnos($alumno));
                
        return redirect()->route('index');
    }

    public function costos(){
        return view('modulos.registro.costos');
    }

}
