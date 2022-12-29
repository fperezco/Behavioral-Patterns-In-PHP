<?php

namespace App\Behavioral_Patterns\State\Classes;

class Document
{
    /**
     * @var State A reference to the current state of the Context.
     */
    private State $state;

    public function __construct(State $state)
    {
        $this->transitionTo($state);
    }

    /**
     * The Context allows changing the State object at runtime.
     */
    public function transitionTo(State $state): void
    {
        echo "Context: Transition to " . get_class($state) . ".\n";
        $this->state = $state;
        $this->state->setDocument($this);
    }

    /**
     * The Context delegates part of its behavior to the current State object.
     */
    public function publish(): void
    {
        $this->state->publish();
    }

    /**
     * @return State
     */
    public function getState(): State
    {
        return $this->state;
    }


}