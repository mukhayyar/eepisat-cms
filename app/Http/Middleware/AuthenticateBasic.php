<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthenticateBasic
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->getUser() != env('BASIC_AUTH_USERNAME') || $request->getPassword() != env('BASIC_AUTH_PASSWORD')) {
            return response('Unauthorized.', 401, ['WWW-Authenticate' => 'Basic']);
        }

        // Session-based expiry time in seconds (e.g., 1 hour = 3600 seconds)
        $expiryTime = 3600;

        // Get the last activity time from the session
        $lastActivity = session('last_activity_time');

        // Check if the session has expired
        if ($lastActivity && (time() - $lastActivity > $expiryTime)) {
            session()->flush(); // Clear session data
            return response('Session expired. Please log in again.', 401, ['WWW-Authenticate' => 'Basic']);
        }

        // Update the last activity time in the session
        session(['last_activity_time' => time()]);

        return $next($request);
    }
}
