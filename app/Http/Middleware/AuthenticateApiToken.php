<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthenticateApiToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $authorizationHeader = $request->header('Authorization');

        // Check if the header contains a Bearer token
        if (!$authorizationHeader || !str_starts_with($authorizationHeader, 'Bearer ')) {
            return response()->json(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
        }

        // Extract the token from the header
        $token = substr($authorizationHeader, 7); // Remove 'Bearer ' prefix

        // Get the valid API token from the 'auth.php' configuration file
        $validToken = config('auth.app_api_token');

        // Check if the provided token matches the valid token
        if ($token !== $validToken) {
            return response()->json(['error' => 'Invalid API Token'], Response::HTTP_UNAUTHORIZED);
        }

        return $next($request);
    }
}
