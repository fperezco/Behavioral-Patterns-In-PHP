<?php

namespace App\Behavioral_Patterns\Chain_Of_Responsibility_Pattern\Classes;

use App\Behavioral_Patterns\Chain_Of_Responsibility_Pattern\Classes\ParentClass\HttpMiddleware;
use App\Behavioral_Patterns\Chain_Of_Responsibility_Pattern\Interfaces\HttpRequestInterface;

class RoleIsValidForRouteMiddleware extends HttpMiddleware
{
    private array $routeRoles;

    public function __construct()
    {
        $this->routeRoles[] = array('/home' => 'noRegistered', '/client' => 'userRole', '/admin' => 'adminRole');
        parent::__construct();
    }

    /**
     * @throws \Exception
     */
    public function handle(HttpRequestInterface $request)
    {
        foreach ($this->routeRoles as $routeRole) {
            if ($routeRole[$request->getEndpoint()] != $request->getRolename()) {
                throw new \Exception("invalid privileges for user:" . $request->getUsername() . " with Role " . $request->getRolename() . " on endpoint: " . $request->getEndpoint());
            }
        }
        echo "valid user/role for this endpoint => ";
        parent::handle($request);
    }
}