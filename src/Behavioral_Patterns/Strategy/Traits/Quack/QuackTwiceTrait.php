<?php

namespace App\Behavioral_Patterns\Strategy_Pattern_Ducks\Traits\Quack;
/**
 * Trait QuackTwice
 * In php we don't have multiple inheritance so we must
 * use traits, by this way we will lose part of the meaning
 * of the interface
 */
//class QuackTwice implements QuackBehaviour
trait QuackTwiceTrait
{
    public function quack()
    {
        echo "I'm quacking twice!!";
    }
}