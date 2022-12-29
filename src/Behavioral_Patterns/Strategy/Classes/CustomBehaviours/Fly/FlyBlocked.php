<?php

namespace App\Behavioral_Patterns\Strategy_Pattern_Ducks\Classes\CustomBehaviours\Fly;


use App\Behavioral_Patterns\Strategy_Pattern_Ducks\Interfaces\FlyBehaviour;

class FlyBlocked implements FlyBehaviour {

    public function fly()
    {
        return "I can't fly";
    }
}