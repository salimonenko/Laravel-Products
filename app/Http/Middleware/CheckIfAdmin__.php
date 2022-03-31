<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class CheckIfAdmin11
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
		if (\Auth::check() && (\Auth::user()->isAdmin())) {
            return $next($request);
        }

//		echo 'fgvf';
        return redirect('/login');
    }
}

