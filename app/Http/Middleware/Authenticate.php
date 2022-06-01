<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
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
// public function handle($request, Closure $next)
// {
//     //check here if the user is authenticated
//     if ( ! $this->auth->user() )
//     {
//         // here you should redirect to login 
//         return route('login');
//     }

//     return $next($request);
// }
}
