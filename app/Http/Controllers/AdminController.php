<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comite;
use App\Pais;
use App\Escuela;
use App\Paiscomite;
use App\Alumno;
use DB;

use App\Imports\PaisImport;
use Maatwebsite\Excel\Facades\Excel;


class AdminController extends Controller
{
    public function index(){
      
        $pre = DB::table('alumnos')
            ->join('escuelas', 'escuelas.id', '=', 'alumnos.pk_escuelas')
            ->join('paiscomites', 'alumnos.pk_inscripcion', '=', 'paiscomites.id')
            ->join('comites', 'paiscomites.pk_comite', '=', 'comites.id')
            ->join('pais', 'paiscomites.pk_pais', '=', 'pais.id')
            ->select(
                    'alumnos.id as id',
                    'alumnos.codigo',
                    'escuelas.nombre as escuela',
                    'comites.nombre as comite',
                    'pais.nombre as pais'
                    )
            ->orderBy('alumnos.pk_escuelas', 'asc')
            ->where('alumnos.nombre', '')
            ->get();

        $inscritos = DB::table('alumnos')
            ->join('escuelas', 'escuelas.id', '=', 'alumnos.pk_escuelas')
            ->join('paiscomites', 'alumnos.pk_inscripcion', '=', 'paiscomites.id')
            ->join('comites', 'paiscomites.pk_comite', '=', 'comites.id')
            ->join('pais', 'paiscomites.pk_pais', '=', 'pais.id')
            ->select(
                'alumnos.nombre',
                'alumnos.ap_paterno',
                'alumnos.ap_materno',
                'alumnos.edad',
                'alumnos.mail',
                'alumnos.codigo',
                'escuelas.nombre as escuela',
                'comites.nombre as comite',
                'pais.nombre as pais'
                )
            ->where('alumnos.nombre', '<>', '')
            ->orderBy('alumnos.pk_escuelas', 'asc')
            ->get();
        
        $num_inscritos = $inscritos->count();
        $num_pre       = $pre->count();

        return view('admin.index', ['inscritos'=>$inscritos, 'pre'=>$pre, 'n_ins'=>$num_inscritos, 'n_pre'=>$num_pre]);
    }


    /**
     * Comité
     */
    public function comite(){
        $comite = Comite::all();
        return view('admin.comite', ['data'=>$comite]);
    }

    public function savecomite(Request $request){
        $comite = new Comite;
        $comite->nombre = $request->input('nombre_comite');
        $comite->idioma = $request->input('idioma');
        $comite->save();
        
        return redirect('Admin-Comite');
    }

    public function deletecomite($id){
        if (DB::table('paiscomites')->where('pk_comite', $id)->first()) {
            return '<h1>No puede elimnar este comité, ya que conteine paises agregados.</h1>';
        }else{
            DB::table('comites')
                        ->where('id', $id)
                        ->delete();
            return redirect('Admin-Comite');
        }
    }

    /**
     * Pais
     */
    public function pais(){
        $pais = Pais::all();
        return view('admin.pais', ['data'=>$pais]);
    }

    public function savepais(Request $request){

        $pais = new Pais;
        $pais->nombre = $request->input('nombre_pais');

        if (!(DB::table('pais')->where('nombre', $pais->nombre)->first())) {
            $pais->save();
            return redirect('Admin-Pais');
        }else{
            return 'Ya existe el pais: '.$pais->nombre;
        }
    }

    public function deletepais($id){

        if (DB::table('paiscomites')->where('pk_pais', $id)->first()) {
            return 'No puede eliminar este país, ya que esta registrado en un comité.';
        }else{
            DB::table('pais')
                    ->where('id', $id)
                    ->delete();
            return redirect('Admin-Pais');
        }
    }

    public function importPaises(Request $request){
        
        Excel::import(new PaisImport, request()->file('archivo_xlsx'), 'local', \Maatwebsite\Excel\Excel::XLSX);

        return redirect('Admin-Pais');     
    }

    /**
     * Escuela
     */
    public function escuela(){
        $escuelas = Escuela::all();
        $comites = Comite::all();
        return view('admin.escuela', ['data'=>$escuelas, 'comite'=>$comites]);
    }

    public function saveescuela(Request $request){
        $escuela = new Escuela;
        $escuela->nombre = $request->input('nombre_escuela');
        $escuela->responsable = $request->input('nombre_responsable');
        $escuela->email = $request->input('mail');
        $escuela->save();
        
        return redirect('Admin-Escuela');
    }

    public function deleteescuela($id){
        DB::table('escuelas')
                    ->where('id', $id)
                    ->delete();
        return redirect('Admin-Escuela');
    }

    public function preregistroescuela(Request $request){

        $comite = $request->input('id_comite');
        $escuela = $request->input('id_escuela');

        $dato_escuela = DB::table('escuelas')->where('id', $escuela)->first();
        $dato_comite = DB::table('comites')->where('id', $comite)->first();

        $paises = DB::table('paiscomites')
            ->join('pais', 'paiscomites.pk_pais', '=', 'pais.id')
            ->select('paiscomites.id', 'pais.nombre as pais', 'paiscomites.pk_comite', 'paiscomites.disponible')
            ->where([
                ['paiscomites.pk_comite', $comite],
                ['paiscomites.disponible', 1]
            ])
            ->get();

        return view('admin.preregistro', ['paises'=>$paises, 'escuela'=>$dato_escuela, 'comite'=>$dato_comite]);
    }

    public function generarregistro(Request $request){
           
        $escuela = $request->input('id_escuela');
        $paises = $request->input('paises');

        foreach ($paises as $item) {
            $codigo = str_random(5);
            while (DB::table('alumnos')->where('codigo', $codigo)->first()) {
                $codigo = str_random(5);
            }
            $alumno = new Alumno;
            $alumno->nombre = "";
            $alumno->ap_materno = "";
            $alumno->ap_paterno = "";
            $alumno->edad = 0;
            $alumno->mail = "";
            $alumno->codigo = $codigo;
            $alumno->preinscrito = 1;
            $alumno->pk_escuelas = $escuela;
            $alumno->pk_inscripcion = $item;
            $alumno->save(); 
            DB::table('paiscomites')->where('id', $item)->update(['disponible' => 0]);
        }

        return redirect('Admin-Escuela');
    }

    /**
     * PaisComite
     */
    public function paiscomite(){

        $comite = Comite::all();

        $pais = Pais::all();

        $paiscomite = DB::table('paiscomites')
            ->join('comites', 'paiscomites.pk_comite', '=', 'comites.id')
            ->join('pais', 'paiscomites.pk_pais', '=', 'pais.id')
            ->select('paiscomites.id', 'pais.nombre as pais', 'paiscomites.pk_comite', 'paiscomites.disponible')
            ->get();

        return view('admin.paiscomite', ['pc'=>$paiscomite, 'comites'=>$comite, 'paises'=>$pais]);
    }

    public function savepaiscomite(Request $request){

        $paises = $request->input('paises');

        foreach ($paises as $item) {
            $pc = new Paiscomite;
            $pc->pk_pais = $item;
            $pc->pk_comite = $request->comite;
            $pc->disponible = true;
            $pc->save(); 
        }

        return redirect('Admin-PaisComite');
    }

    public function deletepaiscomite($id){
        DB::table('paiscomites')
                    ->where('pk_comite', $id)
                    ->delete();
        return redirect('Admin-PaisComite');
    }
}