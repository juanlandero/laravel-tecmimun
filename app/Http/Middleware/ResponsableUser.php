<?php

namespace App\Http\Middleware;

use Closure;

class ResponsableUser
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
        if ($request->user()->pk_permisos == 2) {
            return $next($request);
        }else{
            return redirect('/');
        }

    }
}
