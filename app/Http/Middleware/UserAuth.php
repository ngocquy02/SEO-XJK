<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class UserAuth
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
        if(!Auth::guard('web')->check()){
            return redirect()->route('login-user');
        }else{
            return $next($request);
        }
    }
}
