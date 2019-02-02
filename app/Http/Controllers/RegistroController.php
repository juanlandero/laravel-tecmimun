<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\Comite;
use App\Escuela;
use DB;

class RegistroController extends Controller
{
    
    public function comoRegistrarme(){
        return view('registro.comoRegistrarme');
    }

    public function nuevoRegistro(){
        $comites = Comite::all();
        $escuelas = Escuela::all();
        return view("registro.registroCompleto", ['comites'=>$comites, 'escuelas'=>$escuelas]);
    }  
    
    public function getPaises(Request $request){
        $dato = '<select name="id_pais">';
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
        return view('registro.registroCodigo');
    }

    public function verificarCodigo(Request $request){

        $hasCodigo = $request->input('codigo');

        if ($hasCodigo != null) {
            $alumno_datos = DB::table('alumnos')->where('codigo', $hasCodigo)->first();
            
            if ($alumno_datos != null) {
                return [
                    'resultado' => true,
                    'texto' => 'Nuevo/'.$alumno_datos->codigo,
                    'alumno'=> $alumno_datos
                ];
            }else{
                return [
                    'resultado' => false,
                    'texto' => 'El código no es valido'
                ];
            }
        }else{
            return [
                'resultado' => false,
                'texto'=>'Debe introducir un código.'
            ];
        }
    }

    public function confirmarRegistro($codigo){
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
                        ['alumnos.codigo', $codigo],
                        ['alumnos.preinscrito', 0]
                    ])
                    ->first();
        if ($alumnos) {
            return view("registro.registroCompleto", ['d'=>$alumnos]);
        }else{
            return 'Verifica tu código';
        }
        
    }



    public function guardarAlumno(Request $request){
        if (!$request->input('codigo')) {
            $paiscomite = DB::table('paiscomites')
                        ->where([
                            ['pk_comite', $request->input('id_comite')],
                            ['pk_pais', $request->input('id_pais')]
                        ])
                        ->select('paiscomites.id')
                        ->first();

            $nuevo = new Alumno;
            $nuevo->nombre = $request->input('nombre');
            $nuevo->ap_paterno = $request->input('ap1');
            $nuevo->ap_materno = $request->input('ap2');
            $nuevo->edad = $request->input('edad');
            $nuevo->mail = $request->input('email');
            $nuevo->codigo = "";
            $nuevo->preinscrito = 1;
            $nuevo->pk_escuelas = $request->input('id_escuela');
            $nuevo->pk_inscripcion = $paiscomite->id;
            $nuevo->save();

            DB::table('paiscomites')
                ->where('id', $paiscomite->id)
                ->update(['disponible' => 0]);

            $alumno = DB::table('alumnos')
                ->join('escuelas', 'escuelas.id', '=', 'alumnos.pk_escuelas')
                ->join('paiscomites', 'alumnos.pk_inscripcion', '=', 'paiscomites.id')
                ->join('comites', 'paiscomites.pk_comite', '=', 'comites.id')
                ->join('pais', 'paiscomites.pk_pais', '=', 'pais.id')
                ->select(
                    'alumnos.id',
                    'alumnos.nombre',
                    'alumnos.ap_paterno',
                    'alumnos.ap_materno',
                    'alumnos.pk_escuelas',
                    'alumnos.codigo',
                    'escuelas.nombre as escuela',
                    'comites.nombre as comite',
                    'pais.nombre as pais'
                    )
                ->where('alumnos.mail', $request->input('email'))
                ->first();
        return view('registro.confirmacion', ['alumno'=>$alumno]);
        }else{
            $codigo = $request->input('codigo');
            $id = $request->input('id');
            DB::table('alumnos')
                    ->where([
                        ['codigo', $codigo],
                        ['id', $id]
                    ])
                    ->update(
                        [
                            'nombre'        =>  $request->input('nombre'),
                            'ap_paterno'    =>  $request->input('ap1'),
                            'ap_materno'    =>  $request->input('ap2'),
                            'edad'          =>  $request->input('edad'),
                            'mail'          =>  $request->input('email'),
                            'preinscrito'   =>  1
                        ]
                    );
            
            $alumno = DB::table('alumnos')
                    ->join('escuelas', 'escuelas.id', '=', 'alumnos.pk_escuelas')
                    ->join('paiscomites', 'alumnos.pk_inscripcion', '=', 'paiscomites.id')
                    ->join('comites', 'paiscomites.pk_comite', '=', 'comites.id')
                    ->join('pais', 'paiscomites.pk_pais', '=', 'pais.id')
                    ->select(
                        'alumnos.id',
                        'alumnos.nombre',
                        'alumnos.ap_paterno',
                        'alumnos.ap_materno',
                        'alumnos.pk_escuelas',
                        'alumnos.codigo',
                        'escuelas.nombre as escuela',
                        'comites.nombre as comite',
                        'pais.nombre as pais'
                        )
                    ->where('alumnos.codigo', $codigo)
                    ->first();
            return view('registro.confirmacion', ['alumno'=>$alumno]);
        }
    }

    public function costos(){
        return view('registro.fechasCostos');
    }

}
