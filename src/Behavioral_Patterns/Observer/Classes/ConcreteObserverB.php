<?php

namespace App\Behavioral_Patterns\Observer\Classes;

class ConcreteObserverB implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        if ($subject->getState() == 0 || $subject->getState() >= 2) {
            echo "ConcreteObserverB: Reacted to the event.\n";
        }
    }
}