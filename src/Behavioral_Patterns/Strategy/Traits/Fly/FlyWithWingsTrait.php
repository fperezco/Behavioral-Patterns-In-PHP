<?php

namespace App\Behavioral_Patterns\Strategy_Pattern_Ducks\Traits\Fly;
/**
 * Trait FlyWithWings
 * In php we don't have multiple inheritance so we must
 * use traits, by this way we will lose part of the meaning
 * of the interface
 */
//FlyWithWings
//class FlyWithWings implements FlyBehaviour
trait FlyWithWingsTrait
{
    public function fly()
    {
        echo "I'm flying with wings!!";
    }
}