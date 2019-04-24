<?php

namespace App\Http\Middleware;

use Closure;

class AdminUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       
        if ($request->user()->pk_permisos == 1) {
            return $next($request);
        }else{
            switch ($request->user()->pk_permisos) {
                case 3:
                    return redirect()->route('mesa.index');
                    break;

                case 2:
                    return redirect()->route('responsable.view');
                    break;
                
                default:
                    return redirect('/');
                    break;
            }
        }

    }
}