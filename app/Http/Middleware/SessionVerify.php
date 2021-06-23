<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Requests;

class SessionVerify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Requests  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Requests $request, Closure $next)
    {
        $check = $request->session()->has('login');
        if($check)
        {
            return $next($request);
        }
        else
        {
            return redirect('/login');
        }
    }
}