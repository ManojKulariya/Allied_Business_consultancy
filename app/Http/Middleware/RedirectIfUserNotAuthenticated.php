<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfUserNotAuthenticated
{
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('web')->check()) {
            return redirect()->route('users.login');
        }

        return $next($request);
    }
}
