<?php

namespace App\Behavioral_Patterns\Strategy_Pattern_Ducks\Classes\CustomBehaviours\Quack;


use App\Behavioral_Patterns\Strategy_Pattern_Ducks\Interfaces\QuackBehaviour;

class QuackTwice implements QuackBehaviour {

    public function quack()
    {
        return "Quacking twice";
    }
}