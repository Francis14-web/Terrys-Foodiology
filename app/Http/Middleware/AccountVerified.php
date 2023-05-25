<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AccountVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is restricted
        $user = auth()->guard('user')->user();

        // dd($user);
        if ($user && $user->account_verified == 0) {
           return redirect()->route('user.verification');
        }
        return $next($request);
    }
}
