<?php

namespace App\Behavioral_Patterns\Chain_Of_Responsibility_Pattern\Classes;

use App\Behavioral_Patterns\Chain_Of_Responsibility_Pattern\Classes\ParentClass\HttpMiddleware;
use App\Behavioral_Patterns\Chain_Of_Responsibility_Pattern\Interfaces\HttpRequestInterface;

class EndpointExistsMiddleware extends HttpMiddleware
{
    private array $endpoints;
    public function __construct()
    {
        $this->endpoints = ['/home','/client','/admin'];
        parent::__construct();
    }

    /**
     * @throws \Exception
     */
    public function handle(HttpRequestInterface $request)
    {
        if (!in_array($request->getEndpoint(),$this->endpoints)) {
            throw new \Exception("route not found");
        }
        echo "endpoint exists => ";
        parent::handle($request);
    }
}