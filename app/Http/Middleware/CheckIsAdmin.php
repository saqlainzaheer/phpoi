<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated and has the 'admin' user_type
        if (auth()->check() && auth()->user()->user_type === 'admin') {
            return $next($request);
        }
        // If not an admin, redirect back
        Auth::logout();
        return redirect('/login')->with('access_denied','You are not authorized to access.');
    }
}
