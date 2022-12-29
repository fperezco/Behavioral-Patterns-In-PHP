<?php

namespace App\Behavioral_Patterns\Template_Method\Classes;

/**
 * Concrete implementation that follows steps using email infrastructure
 */
class EmailUsersProcessor extends UsersProcessor
{
    private string $server;
    private string $username;
    private string $password;

    public function __construct(string $server, string $username, string $password)
    {
        $this->server = $server;
        $this->username = $username;
        $this->password = $password;
    }

    function retrieveUserLists(): array
    {
        //connect to the server, looking for the concrete email, download get users list and return
        return [];
    }

    function hook1(): void
    {
        // TODO: Implement hook1() method.
    }

    function returnResultsReport(): void
    {
        //send and email back...
    }
}