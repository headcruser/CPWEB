<?php
namespace Framework\Auth;

use Interop\Http\Server\MiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Interop\Http\Server\RequestHandlerInterface;

class LoggedInMiddleware implements MiddlewareInterface
{
    private $auth;

    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }
   /**
     * Process an incoming server request and return a response, optionally delegating
     * response creation to a handler.
     *
     * @param ServerRequestInterface $request
     * @param RequestHandlerInterface $handler
     *
     * @return ResponseInterface
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler)
    {
        $user = $this->auth->getUser();
        if(is_null($user)){
            throw new \Exception("Error Processing Request", 1);
        }
        return $request->handler($request);
    }
}
