<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (! auth()->check()) {
            return redirect()->route('login');
        }

        if (! auth()->user()->role) {
            abort(403, 'No role assigned to this user.');
        }

        if (auth()->user()->role->name !== $role) {
            abort(403, 'You are not authorized to access this page.');
        }

        return $next($request);
    }
}