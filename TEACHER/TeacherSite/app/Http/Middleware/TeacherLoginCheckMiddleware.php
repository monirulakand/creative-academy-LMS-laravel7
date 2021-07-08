<?php

namespace App\Http\Middleware;

use Closure;

class TeacherLoginCheckMiddleware
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
        if($request->session()->has('Teacher_Email')){
            return $next($request);
        }
        else{
            return redirect('/Login');
        }
    }
}
