<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

     public function handle(Request $request, Closure $next)
     {
         //the user role 1 is admin
         if(!Auth::user()->role == '1'){
             return redirect('/dashboard')->with('status', 'Access Denied, You are not the administrator');
         }
 //then this is else
         return $next($request);
         //this $next req: will be configured in login controller
     }
}
