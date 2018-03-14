<?php
namespace Framework\Actions;

use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;

/**
 * Utilities Router method
 * Trait RouterAwareAction
 */
trait RouterAwareAction
{
    /**
     * Redirect Response
     * @param string $path
     * @param array $params=[]
     * @return ResponseInterface
     */
    public function redirect(string $path, array $params = []):ResponseInterface
    {
        $redirectUri = $this->router->generateUri($path, $params);
        return (new Response())
            ->withStatus(301)
            ->withHeader('location', $redirectUri);
    }
}
