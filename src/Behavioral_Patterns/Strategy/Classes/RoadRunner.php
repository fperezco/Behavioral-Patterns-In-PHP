<?php

namespace App\Behavioral_Patterns\Strategy_Pattern_Ducks\Classes;

use App\Behavioral_Patterns\Strategy_Pattern_Ducks\AbstractClasses\Duck;
use App\Behavioral_Patterns\Strategy_Pattern_Ducks\Classes\CustomBehaviours\Fly\FlyWithRockets;
use App\Behavioral_Patterns\Strategy_Pattern_Ducks\Classes\CustomBehaviours\Quack\QuackBeep;

/**
 * This class reuse behaviours to create a new one
 * Class RoadRunner
 */
class RoadRunner extends Duck {

    public function __construct(){
        $this->setFlyBehaviour(new FlyWithRockets());
        $this->setQuackBehaviour(new QuackBeep());
    }

    public function display()
    {
        // TODO: Implement display() method.
        echo "A roadrunner makes beep and go with rockets";
    }
}