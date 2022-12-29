<?php

namespace App\Behavioral_Patterns\Strategy_Pattern_Ducks\Classes;



use App\Behavioral_Patterns\Strategy_Pattern_Ducks\AbstractClasses\Duck;
use App\Behavioral_Patterns\Strategy_Pattern_Ducks\Classes\CustomBehaviours\Fly\FlyBlocked;
use App\Behavioral_Patterns\Strategy_Pattern_Ducks\Classes\CustomBehaviours\Quack\QuackBeep;

class RubberDuck extends Duck {

    public function __construct(){
        $this->setFlyBehaviour(new FlyBlocked());
        $this->setQuackBehaviour(new QuackBeep());
    }

    public function display()
    {
        // TODO: Implement display() method.
        echo "displaying a rubber duck...";
    }
}