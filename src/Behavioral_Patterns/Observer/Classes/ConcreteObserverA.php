<?php

namespace App\Behavioral_Patterns\Observer\Classes;

/**
 * Concrete Observers react to the updates issued by the Subject they had been
 * attached to.
 */
class ConcreteObserverA implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        if ($subject->getState() < 3) {
            echo "ConcreteObserverA: Reacted to the event.\n";
        }
    }
}