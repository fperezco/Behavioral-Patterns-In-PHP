<?php

namespace App\Tests\Behavioral_Patterns\Chain_Of_Responsibility;

use App\Behavioral_Patterns\Chain_Of_Responsibility_Pattern\Interfaces\HandlerInterface;
use App\Behavioral_Patterns\Chain_Of_Responsibility_Pattern\Interfaces\HttpRequestInterface;

class COR_ClientServer
{
    /**
     * @var HandlerInterface
     */
    private $middleware;

    /**
     * The client can configure the server with a chain of middleware objects.
     */
    public function setMiddleware(HandlerInterface $middleware): void
    {
        $this->middleware = $middleware;
    }

    /**
     * The server gets the email and password from the client and sends the
     * authorization request to the middleware.
     * @throws \Exception
     */
    public function manageRequest(HttpRequestInterface $request):bool
    {
        try {
            $this->middleware->handle($request);
            echo "Server: endpoint accessed with success!\n";
        } catch (\Exception $e) {
            throw new \Exception("Error processing the request => " . $e->getMessage());
        }
        return true;

    }
}
