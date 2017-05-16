<?php

namespace App\Http\Middleware;

use Closure;

class CustomCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(auth()->user()->age > 118)
            return $next($request);

        abort(403, "paugek!");
    }
}
