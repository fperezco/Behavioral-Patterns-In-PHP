<?php

namespace App\Behavioral_Patterns\Strategy_Pattern_Ducks\Traits\Quack;
/**
 * Trait QuackLoud
 * In php we don't have multiple inheritance so we must
 * use traits, by this way we will lose part of the meaning
 * of the interface
 */
//class QuackLoud implements QuackBehaviour
trait QuackLoudTrait
{
    public function quack()
    {
        echo "I'm quacking so loud!!";
    }
}