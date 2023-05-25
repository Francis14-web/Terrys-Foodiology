<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AccountRestricted
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
        if ($user && $user->is_restricted) {
                // Customize the error message and return a 403 response
            $errorMessage = 'Your account is restricted.';
            //return to login page
            abort(403, $errorMessage);
        }
        return $next($request);
    }
}
