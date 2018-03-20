<?php
namespace App\Auth;

class ForbidenMiddleware
{
    public function __invoke(ServerRequestInterface $request, callable $next)
    {

        return $next($request);
    }
}
