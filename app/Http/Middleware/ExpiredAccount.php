<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ExpiredAccount
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user account is expired
        $user = auth()->guard('user')->user();
        if ($user && $user->role == "Visitor" && $user->until_when < now()) {
            return redirect()->route('user.expired');
        }
        return $next($request);
    }
}
