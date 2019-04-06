<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\Responsable;
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

        return view('dashboard.administrador.dashboard', ['inscritos'=>$inscritos, 'pre'=>$pre, 'n_ins'=>$num_inscritos, 'n_pre'=>$num_pre]);
    }

    /**
     * Pais
     */
    public function pais(){
        $pais = Pais::orderBy('pais.nombre', 'asc')->get();
        return view('dashboard.administrador.dash-pais', ['data'=>$pais]);
    }

    public function newPais(Request $request){
        $pais = new Pais;
        $pais->nombre = $request->input('nombre_pais');

        if (!(DB::table('pais')->where('nombre', $pais->nombre)->first())) {
            $pais->save();

            return ['return' => 'Guardado correctamente.'];
        }else{
            return ['return' => 'Ya existe el pais: '.$pais->nombre];
        }
    }

    public function deletePais(Request $r){
        $id = $r->input('id_pais');

        if (DB::table('paiscomites')->where('pk_pais', $id)->first()) {
            return ['return' => false, 'text' => 'No puede eliminar este país, ya que esta registrado en un comité.'];
        }else{
            DB::table('pais')
                    ->where('id', $id)
                    ->delete();
            return ['return' => true, 'text' => 'Eliminado correctamente'];
        }
    }

    public function importPaises(Request $request){
        
        Excel::import(new PaisImport, request()->file('archivo_xlsx'), 'local', \Maatwebsite\Excel\Excel::XLSX);

        return redirect('pais');     
    }

    public function getPais(){
        $paises = Pais::orderBy('pais.nombre', 'asc')->get();

        $arrayPaises = [];

        foreach ($paises as $value) {
            $arrayPaises [] = [
                'id' => $value->id,
                'nombre' => $value->nombre,
                'eliminar' => '<a onclick="deletePais('.$value->id.')"><span class="color-dng"><i class="fas fa-times-circle"></span></a>'
            ];
        }

        return $arrayPaises;
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
        return view('dashboard.administrador.dash-comite', ['comites' => $arrayComites]);
    }
    
    public function detailcomite(Request $request){
        $id_comite = $request->input('comite');
        
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
                    ->where('paiscomites.pk_comite', $id_comite)
                    ->orderBy('pais.nombre', 'asc')
                    ->get();

        if ($paises->count() != 0) {
            return json_encode($paises);
        }else{
            return [
                'resultado'=>false,
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
        
        return redirect('admin/comite');
    }

    public function deletecomite(Request $r){
        $id = $r->input('comite');
        if (DB::table('paiscomites')->where('pk_comite', $id)->first()) {
            return ['return' => false, 'text' => 'No se puede eliminar, hay países agregados'];
        }else{
            DB::table('comites')
                        ->where('id', $id)
                        ->delete();
            return ['return' => true, 'text' => 'Eliminado'];
        }
    }

    public function getExcel(Request $request){
        $id = $request->input('comite');

        $archivo = DB::table('comites')->where('comites.id', $id)->first();

        return (new PaiscomiteExport($id))->download($archivo->nombre.'.xlsx');
    }

    /**
     * Escuela
     */
    public function escuela(){
        $escuelas = Escuela::all();
        $comites = Comite::all();
        return view('dashboard.administrador.dash-escuela', ['data'=>$escuelas, 'comite'=>$comites]);
    }

    public function saveescuela(Request $request){

        $password = str_random(5);

        $escuela = new Escuela;
        $escuela->nombre = $request->input('nombre_escuela');
        $escuela->responsable = $request->input('nombre_responsable');
        $escuela->email = $request->input('mail');
        $escuela->password = $password;
        $escuela->save();


        $responsable = new User;
        $responsable->name = $request->input('nombre_responsable');
        $responsable->email =$request->input('mail');
        $responsable->password = Hash::make($password);
        $responsable->pk_permisos = 2;
        $responsable->save();


        $data = DB::table('escuelas')->where('email', $request->input('mail'))->first();

        Mail::to($request->input('mail'))->send(new Responsable($data));
       
        return redirect('admin/escuela');
    }

    public function deleteescuela(Request $r){
        $id = $r->input('escuela');

        if (DB::table('alumnos')->where('pk_escuelas', $id)->first()) {
            return ['return' => false, 'text' => 'No se puede eliminar, hay alumnos registrados con esta escuela.'];
        }else{
            DB::table('escuelas')
                    ->where('id', $id)
                    ->delete();
            return ['return' => true, 'text' => 'Eliminado'];
        }
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
                    ->orderBy('pais.nombre', 'asc')
                    ->get();

        if ($paises->count() != 0) {
            return json_encode($paises);
        }else{
            return [
                'resultado'=>false,
                'texto'=>'No hay alumnos registrados aun.'
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
            ->orderBy('pais.nombre', 'asc')
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
            $alumno->recepcionado = false;
            $alumno->pk_escuelas = $escuela;
            $alumno->pk_inscripcion = $item;
            $alumno->save(); 
            DB::table('paiscomites')->where('id', $item)->update(['disponible' => 0]);
        }

        return redirect('admin/escuela');
    }

    public function getExcelEscuelas(Request $request){
        $id = $request->input('escuela');

        $archivo = DB::table('escuelas')->where('escuelas.id', $id)->first();

        return (new EscuelaExport($id))->download($archivo->nombre.'.xlsx');
    }


    /**
     * PaisComite
     */ 
    public function paiscomite(Request $request){
        $comite = $request->input('comite');

        $sub_query = DB::table('paiscomites')
            ->select('pk_pais')
            ->where('pk_comite', $comite)
            ->get();

        if ($sub_query->count() > 0) {

            $array_id = [];
            foreach ($sub_query as $idpais) {
                $array_id [] = [
                    $idpais->pk_pais
                ];
            }

            $pais = DB::table('pais')
                ->select('id', 'nombre')
                ->whereNotIn('pais.id', $array_id)
                ->orderBy('pais.id', 'asc')
                ->get();
            if ($pais->count() == 0) {
                $pais = null;
            }

        }else {
            $pais = Pais::orderBy('nombre', 'asc')->get();
        }

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

        return redirect('admin/comite/');
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
            return ['return' => true, 'text' => 'Eliminado...'];
        }else{
            return ['return' => false, 'text' => 'No puede eliminar los paises porque ya existen '.$query.' alumnos registrados'];
        }
    }

}