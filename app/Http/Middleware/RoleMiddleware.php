<?php

namespace App\Http\Middleware;
use Closure;
use App\Models\User;

class RoleMiddleware
{
    /**
     * 只允许管理员登录
     */
    public function handle($request, Closure $next)
    {
        if($request->input('email')){
            $user = User::where('email',$request->input('email'))->first();
            if ($user->is_admin != 1) {
                session()->flash('danger','您不是管理员');
                return redirect('admin/login');
            }
        }
        return $next($request);
    }
}
