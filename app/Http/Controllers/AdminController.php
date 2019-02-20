<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Comite;
use App\Pais;
use App\Escuela;
use App\Paiscomite;
use App\Alumno;
use App\User;
use DB;

use App\Imports\PaisImport;
use App\Exports\PaiscomiteExport;
use App\Exports\EscuelaExport;
use Maatwebsite\Excel\Facades\Excel;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

        $comites = Comite::all();

        $arrayComites = [];

        foreach ($comites as $item) {
            $paises = DB::table('paiscomites')
                            ->where('paiscomites.pk_comite', $item->id)
                            ->count();

            $arrayComites[] = [
                        'id' => $item->id,
                        'nombre' => $item->nombre,
                        'idioma' => $item->idioma,
                        'mail' => $item->codigo,
                        'paises' => $paises
                            ];
        }

        return view('admin.comite', ['comites' => $arrayComites]);
    }


    public function getExcel(Request $request){
        $id = $request->input('comite');

        $archivo = DB::table('comites')->where('comites.id', $id)->first();

        return (new PaiscomiteExport($id))->download($archivo->nombre.'.xlsx');
    }

    public function detailcomite(Request $request){
        $id = $request->input('comite');

        $paises = DB::table('paiscomites')
                    ->join('comites', 'paiscomites.pk_comite', '=', 'comites.id')
                    ->join('pais', 'paiscomites.pk_pais', '=', 'pais.id')
                    ->leftJoin('alumnos', 'alumnos.pk_inscripcion', '=', 'paiscomites.id')
                    ->leftJoin('escuelas', 'escuelas.id', '=', 'alumnos.pk_escuelas')
                    ->select('paiscomites.id',
                            'alumnos.nombre as alumno',
                            'alumnos.codigo',
                            'pais.nombre as pais',
                            'escuelas.nombre as escuela',
                            'comites.nombre as comite')
                    ->where('paiscomites.pk_comite', $id)
                    ->get();

        if ($paises->count() != 0) {
            return json_encode($paises);
        }else{
            return [
                'resultado'=>true,
                'texto'=>'No hay alumnos registrados aun'
            ];
        }
        
    }

    public function savecomite(Request $request){
        $user = str_random(4);
        $comite = new Comite;
        $comite->nombre = $request->input('nombre_comite');
        $comite->idioma = $request->input('idioma');
        $comite->codigo = $user."@comite.mun";
        $comite->save();

        $user_comite = new User;
        $user_comite->name = $request->input('nombre_comite');
        $user_comite->email = $user."@comite.mun";
        $user_comite->password = Hash::make($user);
        $user_comite->pk_permisos = 3;
        $user_comite->save();
        
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
     * PaisComite
     */
    public function paiscomite(Request $request){
        $comite = $request->input('comite');

        $pais = Pais::all();

        $paiscomite = DB::table('paiscomites')
            ->join('comites', 'paiscomites.pk_comite', '=', 'comites.id')
            ->join('pais', 'paiscomites.pk_pais', '=', 'pais.id')
            ->select('paiscomites.id', 'pais.nombre as pais', 'paiscomites.pk_comite', 'paiscomites.disponible')
            ->get();

        return ['pais' => $pais, 'comite' => $comite];
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

        return redirect('Admin-Comite');
    }

    public function deletepaiscomite(Request $request){
        $id = $request->input('comite');
        $query = DB::table('alumnos')
                ->join('paiscomites', 'alumnos.pk_inscripcion', '=', 'paiscomites.id')
                ->where([ [ 'paiscomites.pk_comite', $id] ])
                ->count();

        if ($query == 0) {
            DB::table('paiscomites')
            ->where('pk_comite', $id)
            ->delete();
            return redirect('Admin-Comite');
        }else{
            return 'No puede eliminar los paises porque ya existen '.$query.' alumnos registrados';
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

    public function registrosescuela(Request $request){
        $id = $request->input('comite');

        $paises = DB::table('alumnos')
                    ->join('paiscomites', 'alumnos.pk_inscripcion', '=', 'paiscomites.id')
                    ->join('comites', 'paiscomites.pk_comite', '=', 'comites.id')
                    ->join('pais', 'paiscomites.pk_pais', '=', 'pais.id')
                    ->leftJoin('escuelas', 'escuelas.id', '=', 'alumnos.pk_escuelas')
                    ->select('alumnos.id',
                            'alumnos.nombre as alumno',
                            'alumnos.codigo',
                            'pais.nombre as pais',
                            'escuelas.nombre as escuela',
                            'comites.nombre as comite')
                    ->where('alumnos.pk_escuelas', $id)
                    ->get();

        if ($paises->count() != 0) {
            return json_encode($paises);
        }else{
            return [
                'resultado'=>true,
                'texto'=>'No hay alumnos registrados aun'
            ];
        }
    }

    public function getpaises(Request $request){

        $id_comite = $request->input('comite');

        $paises = DB::table('paiscomites')
            ->join('pais', 'paiscomites.pk_pais', '=', 'pais.id')
            ->join('comites', 'paiscomites.pk_comite', '=', 'comites.id')
            ->select(
                    'paiscomites.id',
                    'pais.nombre as pais',
                    'comites.nombre as comite',
                    'paiscomites.disponible'
                )
            ->where([
                ['paiscomites.pk_comite', $id_comite],
                ['paiscomites.disponible', 1]
                ])
            ->get();

        if ($paises->count() == 0 ) {
            $estado = false;
        }else {
            $estado = true;
        }

        return ['estado' => $estado,'pais' => $paises];
    }

    public function generarregistro(Request $request){
           
        $escuela = $request->input('escuela');
        $id_paiscomite = $request->input('paiscomite');

        foreach ($id_paiscomite as $item) {
            $codigo = str_random(5);
            while (DB::table('alumnos')->where('codigo', $codigo)->first()) {
                $codigo = str_random(5);
            }
            $alumno = new Alumno;
            $alumno->nombre = "";
            $alumno->edad = 0;
            $alumno->mail = "";
            $alumno->codigo = $codigo;
            $alumno->preinscrito = 0;
            $alumno->pk_escuelas = $escuela;
            $alumno->pk_inscripcion = $item;
            $alumno->save(); 
            DB::table('paiscomites')->where('id', $item)->update(['disponible' => 0]);
        }

        return redirect('Admin-Escuela');
    }

    public function getExcelEscuelas(Request $request){
        $id = $request->input('escuela');

        $archivo = DB::table('escuelas')->where('escuelas.id', $id)->first();

        return (new EscuelaExport($id))->download($archivo->nombre.'.xlsx');
    }
}