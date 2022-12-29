<?php

namespace App\Behavioral_Patterns\Chain_Of_Responsibility_Pattern\Interfaces;

interface HandlerInterface
{
    public function setNext(HandlerInterface $handler): HandlerInterface;

    public function handle(HttpRequestInterface $request);
}