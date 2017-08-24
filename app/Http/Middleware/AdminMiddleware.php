<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * 只允许管理员操作
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            $user = Auth::user();
            if ($user->is_admin != 1) {
                return abort(403);
            }
        }
        return $next($request);
    }
}
