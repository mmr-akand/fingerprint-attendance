<?php

namespace App\Http\Middleware;

use Closure;

use Sentinel;

class SentinelAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role = null)
    {
        $user = Sentinel::getUser();

        if (!$user) {
            return redirect('/session/login');
        }

        if ($role!=null) {
            $requested_role = Sentinel::findRoleBySlug($role);
            if (!$user->inRole($requested_role)) {
                return redirect('/unauthorized');
            }
        }

        return $next($request);
    }
}
