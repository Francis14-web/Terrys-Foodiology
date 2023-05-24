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
                // Customize the error message and return a 403 response
            $errorMessage = 'Your account access is over.';
            //return to login page
            abort(403, $errorMessage);
        }
        return $next($request);
    }
}
