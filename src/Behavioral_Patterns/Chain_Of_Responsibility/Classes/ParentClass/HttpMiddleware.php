<?php

namespace App\Behavioral_Patterns\Chain_Of_Responsibility_Pattern\Classes\ParentClass;

use App\Behavioral_Patterns\Chain_Of_Responsibility_Pattern\Interfaces\HandlerInterface;
use App\Behavioral_Patterns\Chain_Of_Responsibility_Pattern\Interfaces\HttpRequestInterface;

abstract class HttpMiddleware implements HandlerInterface
{
    protected ?HandlerInterface $nextHandler;

    public function __construct()
    {
        $this->nextHandler = null;
    }

    public function setNext(HandlerInterface $handler): HandlerInterface
    {
        $this->nextHandler = $handler;
        return $this->nextHandler;
    }

    /**
     * Subclasses must override this method to provide their own checks. A
     * subclass can fall back to the parent implementation if it can't process a
     * request.
     */
    public function handle(HttpRequestInterface $request)
    {
        if (!$this->nextHandler) {
            return;
        }

        return $this->nextHandler->handle($request);
    }
}