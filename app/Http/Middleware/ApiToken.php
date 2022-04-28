<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class ApiToken
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->get('key') == env('API_KEY')) {
            return $next($request);
        }
        abort(Response::HTTP_UNAUTHORIZED);
    }
}
