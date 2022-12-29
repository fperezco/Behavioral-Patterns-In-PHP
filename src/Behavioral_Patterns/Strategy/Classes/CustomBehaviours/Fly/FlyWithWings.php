<?php

namespace App\Behavioral_Patterns\Strategy_Pattern_Ducks\Classes\CustomBehaviours\Fly;

use App\Behavioral_Patterns\Strategy_Pattern_Ducks\Interfaces\FlyBehaviour;

class FlyWithWings implements FlyBehaviour{

    public function fly()
    {
        return "I'm flying with wings";
    }
}