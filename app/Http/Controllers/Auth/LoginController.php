<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    
    protected function redirectTo()
    {
        $permiso = Auth::user()->pk_permisos;
        switch ($permiso) {
            case 1:
                $comites = DB::table('comites')->get();
                session(['comites' => $comites]);
                return route('admin.index');
                break;

            case 2:
                return route('responsable.view');
                break;

            case 3:
                $comite = DB::table('comites')->select('id')->where('codigo', Auth::user()->email)->first();
                session(['key_comite' => $comite->id]);

                return route('mesa.index');
                break;
            
            default:
                return '/';
                break;
        }
        
    }              

    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
