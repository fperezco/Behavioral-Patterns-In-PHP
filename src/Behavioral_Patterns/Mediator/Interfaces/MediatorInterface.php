<?php

namespace App\Behavioral_Patterns\Mediator\Interfaces;

/**
 * The Mediator interface declares a method used by components to notify the
 * mediator about various events. The Mediator may react to these events and
 * pass the execution to other components.
 */
interface MediatorInterface
{
    public function notify(object $sender, string $event): void;
}