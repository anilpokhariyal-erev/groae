<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRoleOrPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $roleOrPermission): Response
    {
        if (auth()->check() && (auth()->user()->hasRole('superadmin') || auth()->user()->can($roleOrPermission))) {
            return $next($request);
        }
    
        return abort(403);
    }
    
}
