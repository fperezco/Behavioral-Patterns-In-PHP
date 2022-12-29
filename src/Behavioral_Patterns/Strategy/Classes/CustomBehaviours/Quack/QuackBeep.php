<?php

namespace App\Behavioral_Patterns\Strategy_Pattern_Ducks\Classes\CustomBehaviours\Quack;

use App\Behavioral_Patterns\Strategy_Pattern_Ducks\Interfaces\QuackBehaviour;

class QuackBeep implements QuackBehaviour {

    public function quack()
    {
        return "my quack is a beep";
    }
}