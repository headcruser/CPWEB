<?php
namespace Framework\Auth;

use Interop\Http\Server\MiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Interop\Http\Server\RequestHandlerInterface;

class LoggedInMiddleware
{
    private $auth;

    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    public function __invoke(ServerRequestInterface $request, callable $next)
    {
        $user = $this->auth->getUser();
        if(is_null($user)){
            throw new \Exception("Error Processing Request", 1);
        }
        return $next($request);
    }
}
