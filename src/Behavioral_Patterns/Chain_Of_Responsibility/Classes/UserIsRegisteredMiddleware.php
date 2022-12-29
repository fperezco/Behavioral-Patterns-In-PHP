<?php

namespace App\Behavioral_Patterns\Chain_Of_Responsibility_Pattern\Classes;

use App\Behavioral_Patterns\Chain_Of_Responsibility_Pattern\Classes\ParentClass\HttpMiddleware;
use App\Behavioral_Patterns\Chain_Of_Responsibility_Pattern\Interfaces\HttpRequestInterface;

class UserIsRegisteredMiddleware extends HttpMiddleware
{
    private array $users;
    public function __construct()
    {
        $this->users = ['user1','user2','user3'];
        parent::__construct();
    }

    /**
     * @throws \Exception
     */
    public function handle(HttpRequestInterface $request)
    {
        if (!in_array($request->getUsername(),$this->users)) {
            throw new \Exception("user not found");
        }
        echo "valid user => ";
        parent::handle($request);
    }
}