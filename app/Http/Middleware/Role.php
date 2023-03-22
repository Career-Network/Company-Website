<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Role 
{
    public function handle($request, Closure $next, ...$roles)
    {
        if(in_array($request->user()->role_name, $roles)) {
            return $next($request);
        }
        return redirect('/blog/dashboard');
    }    
}