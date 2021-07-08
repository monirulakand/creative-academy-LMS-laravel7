<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;

class CheckLogin
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
        if($request->session()->has('token')){
            return $next($request);
        }
        else if(Cookie::has('token')){
            return $next($request);
        }
        else{
            return redirect('/login');
        }
    }
}
