<?php

namespace App\Behavioral_Patterns\Chain_Of_Responsibility_Pattern\Classes\HttpRequest;

use App\Behavioral_Patterns\Chain_Of_Responsibility_Pattern\Interfaces\HttpRequestInterface;

class HttpRequestVersion1 implements HttpRequestInterface
{
    private string $endpoint;
    private string $user;
    private string $role;

    public function __construct(string $endpoint, string $user, string $role)
    {
        $this->endpoint = $endpoint;
        $this->user = $user;
        $this->role = $role;
    }

    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    public function getUsername(): string
    {
      return $this->user;
    }

    public function getRolename(): string
    {
        return $this->role;
    }
}