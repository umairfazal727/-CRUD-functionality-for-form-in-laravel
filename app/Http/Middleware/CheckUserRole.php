<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {
            $role = auth()->user()->role;
            if ($role == 'buyer') {
                return redirect()->route('buyer-dashboard');
            } elseif ($role == 'seller') {
                return redirect()->route('seller-dashboard');
            }
        }
        return $next($request);
    }
}
