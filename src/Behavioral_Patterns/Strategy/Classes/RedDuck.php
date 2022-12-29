<?php

namespace App\Behavioral_Patterns\Strategy_Pattern_Ducks\Classes;

use App\Behavioral_Patterns\Strategy_Pattern_Ducks\AbstractClasses\Duck;
use App\Behavioral_Patterns\Strategy_Pattern_Ducks\Classes\CustomBehaviours\Fly\FlyWithWings;
use App\Behavioral_Patterns\Strategy_Pattern_Ducks\Classes\CustomBehaviours\Quack\QuackSoLoud;

/**
 * Class RedDuck
 * We are setting its behaviour in the constructor
 * @package App\Classes
 */
class RedDuck extends Duck {

    public function __construct(){
        $this->setFlyBehaviour(new FlyWithWings());
        $this->setQuackBehaviour(new QuackSoLoud());
    }

    public function display()
    {
        // TODO: Implement display() method.
        echo "displaying a red duck...";
    }
}