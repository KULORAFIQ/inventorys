<?php

namespace App\Http\Middleware;

use Closure;

class PreventBack
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Tambahkan header "no-cache" ke respons
        $response->headers->set('Cache-Control', 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $response->headers->set('Pragma', 'no-cache');
        $response->headers->set('Expires', 'Fri, 30 Oct 1998 14:19:41 GMT');

        return $response;
    }
}
