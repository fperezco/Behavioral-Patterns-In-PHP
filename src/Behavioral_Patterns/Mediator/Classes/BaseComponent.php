<?php

namespace App\Behavioral_Patterns\Mediator\Classes;

use App\Behavioral_Patterns\Mediator\Interfaces\MediatorInterface;

/**
 * The Base Component provides the basic functionality of storing a mediator's
 * instance inside component objects.
 */
class BaseComponent
{
    protected $mediator;

    public function __construct(MediatorInterface $mediator = null)
    {
        $this->mediator = $mediator;
    }

    public function setMediator(MediatorInterface $mediator): void
    {
        $this->mediator = $mediator;
    }
}