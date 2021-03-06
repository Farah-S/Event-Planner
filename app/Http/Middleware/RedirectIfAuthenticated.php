<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard == "admin" && Auth::guard($guard)->check()) {
            return redirect('/');
        }
        if ($guard == "owner" && Auth::guard($guard)->check()) {
            return redirect('/');
        }
        if ($guard == "customer" && Auth::guard($guard)->check()) {
            return redirect('/');
        }
        
        if (Auth::guard($guard)->check()) {
            return redirect('/');
        }

        return $next($request);
    }
}
?>
