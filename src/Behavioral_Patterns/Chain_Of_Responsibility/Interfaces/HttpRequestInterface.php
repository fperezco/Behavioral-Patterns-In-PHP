<?php

namespace App\Behavioral_Patterns\Chain_Of_Responsibility_Pattern\Interfaces;

interface HttpRequestInterface
{
    public function getEndpoint(): string;
    public function getUsername(): string;
    public function getRolename():string;
}