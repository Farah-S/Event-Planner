<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }

    //this method will be triggered before your controller constructor
    public function handle($request, Closure $next, ...$guards)
    {
        if (Auth::guard('customer')->check()) {
            return $next($request);
        }
        if (Auth::guard('owner')->check()) {
            return $next($request);
        }
        if (Auth::guard('admin')->check()) {
            return $next($request);
        }
        return redirect('/');
    }
}
