<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if ($request->is('home') && Auth::user()->role < 4) {

            if (Auth::user()->role == 3) {
                return redirect(route('schooldashboard'));
            }

            if (Auth::user()->role == 2) {
                return redirect(route('companydashboard'));
            }

            if (Auth::user()->role == 1) {
                return redirect(route('studentdashboard'));
            }


        }else {
            return $next($request);
        }

    }
}
