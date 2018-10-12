<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
//use App\Http\Controllers\Auth;
//use Illuminate\Support\Facades\Auth;

class Admin
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
        if (Auth::check() && Auth::user()->role == 'admin') {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->role == 'company') {
            return redirect('/company');
        }
        else {
            return redirect('/customer');
        }
    }
}
