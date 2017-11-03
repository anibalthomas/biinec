<?php

namespace App\Http\Middleware;

use Closure;

use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;    //para agregar la clase auth
use Illuminate\Support\Facades\Cache;    //para agregar la clase Cache

class LogUserActivity
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

        if (Auth::check()) {
            $expiresAt = Carbon::now()->addMinutes(5);
            Cache::put('user-online-'.Auth::user()->id, true, $expiresAt);
        }
        return $next($request);
    }
}
