<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class CheckXdminLogin
{

    public function handle($request, Closure $next)
    {
//        return $next($request); // for test
        if (session()->get('login')) {
            return $next($request);
        }
        return redirect('/xdmin/login');
    }

}