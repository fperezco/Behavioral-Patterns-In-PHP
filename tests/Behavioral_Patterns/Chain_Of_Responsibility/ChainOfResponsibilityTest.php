<?php

namespace App\Tests\Behavioral_Patterns\Chain_Of_Responsibility;

use App\Behavioral_Patterns\Chain_Of_Responsibility_Pattern\Classes\EndpointExistsMiddleware;
use App\Behavioral_Patterns\Chain_Of_Responsibility_Pattern\Classes\HttpRequest\HttpRequestVersion1;
use App\Behavioral_Patterns\Chain_Of_Responsibility_Pattern\Classes\RoleIsValidForRouteMiddleware;
use App\Behavioral_Patterns\Chain_Of_Responsibility_Pattern\Classes\UserIsRegisteredMiddleware;
use PHPUnit\Framework\TestCase;

class ChainOfResponsibilityTest extends TestCase
{
    public function test_chain_of_responsibility_an_exception_is_thrown_through_the_chain()
    {
        //GIVEN
        $server = new COR_ClientServer();
        $chainOfMiddlewares = new EndpointExistsMiddleware();
        $chainOfMiddlewares->setNext(new UserIsRegisteredMiddleware())->setNext(new RoleIsValidForRouteMiddleware());
        $server->setMiddleware($chainOfMiddlewares);
        $request = new HttpRequestVersion1('/home', 'user1', 'roleUser');
        //THEN
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage("Error processing the request => invalid privileges for user:user1 with Role roleUser on endpoint: /home");
        //WHEN
        $server->manageRequest($request);
    }

    public function test_chain_of_responsibility_the_request_goes_over_middlewares_if_everything_is_fine()
    {
        //GIVEN
        $server = new COR_ClientServer();
        $chainOfMiddlewares = new EndpointExistsMiddleware();
        $chainOfMiddlewares->setNext(new UserIsRegisteredMiddleware())->setNext(new RoleIsValidForRouteMiddleware());
        $server->setMiddleware($chainOfMiddlewares);
        $request = new HttpRequestVersion1('/client', 'user1', 'userRole');
        //WHEN //THEN
        $this->assertTrue($server->manageRequest($request));
    }
}


