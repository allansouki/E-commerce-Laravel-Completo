<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class admin
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

        // if (!$request->expectsJson()) {
        //     return route('admin.login');
        // }
        if (!Auth::check()) {
            return redirect('/admin/login');
        }
        return $next($request);
    }
       
}
