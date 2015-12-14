<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class OrganizationMiddleware
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
        if(Auth::check() && (Auth::user()->user_typeId == 5)){
            return $next($request);
        }

        else{
            return redirect('');
        }
        
    }
}
