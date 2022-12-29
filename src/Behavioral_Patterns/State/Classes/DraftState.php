<?php

namespace App\Behavioral_Patterns\State\Classes;

class DraftState extends State
{
    public function publish(): string
    {
        $this->getDocument()->transitionTo(new PublishedState());
        return "moving from draft to published";
    }
}