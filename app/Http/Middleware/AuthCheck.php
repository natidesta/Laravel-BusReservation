<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Session()->has('loginId')){
            return redirect('login')->with('fail','You have to Login first');
        }
        return $next($request);

        if(!Session()->has('loginId')){
            return redirect('admin_login')->with('fail','You have to Login first');
        }
        return $next($request);
    }
}
