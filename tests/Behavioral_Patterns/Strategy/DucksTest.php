<?php

namespace App\Tests\Behavioral_Patterns\Strategy;


use App\Behavioral_Patterns\Strategy_Pattern_Ducks\Classes\CustomBehaviours\Fly\FlyWithWings;
use App\Behavioral_Patterns\Strategy_Pattern_Ducks\Classes\RedDuck;
use App\Behavioral_Patterns\Strategy_Pattern_Ducks\Classes\RoadRunner;
use PHPUnit\Framework\TestCase;

class DucksTest extends TestCase
{
    public function test_redduck_fly_correctly()
    {
        //GIVEN
        $duck = new RedDuck();

        //WHEN
        $flyString = $duck->fly();

        //THEN
        $this->assertEquals($flyString, "I'm flying with wings");
    }

    public function test_roadRunner_fly_correctly()
    {
        //GIVEN
        $duck = new RoadRunner();

        //WHEN
        $flyString = $duck->fly();

        //THEN
        $this->assertEquals($flyString, "I'm flying with rockets");
    }

    public function test_that_we_can_change_behaviour_in_realtime()
    {
        //GIVEN
        $duck = new RoadRunner();

        //WHEN
        $flyString = $duck->fly();

        //THEN
        $this->assertEquals($flyString, "I'm flying with rockets");

        //WHEN
        $duck->setFlyBehaviour(new FlyWithWings());

        //THEN
        $this->assertEquals($duck->fly(), "I'm flying with wings");
    }


}