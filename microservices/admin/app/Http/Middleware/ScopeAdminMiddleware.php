<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Shishima\UserService\UserService;

class ScopeAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = app(UserService::class)->getRequest('get', 'scope/admin');
        if (!$response->ok()) {
            abort(401, 'unauthorized');
        }

        return $next($request);
    }
}
