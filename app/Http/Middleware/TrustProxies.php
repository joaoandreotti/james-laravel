<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Fideloper\Proxy\TrustProxies as Middleware;

class TrustProxies extends Middleware
{
    protected $proxies = '*';
    protected $headers = Request:: HEADER_X_FORWARDED_AWS_ELB;
}

/**
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrustProxies
{
    protected $proxies = '*';
    protected $headers = Request:: HEADER_X_FORWARDED_AWS_ELB;

    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }
}
*/
