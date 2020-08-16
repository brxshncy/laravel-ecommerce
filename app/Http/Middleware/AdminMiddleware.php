<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if(!Auth::guard('admin')->check()){
            return redirect('admin/login')->with('flash','You need to login first.');
        }
        return $next($request);
    }
}
