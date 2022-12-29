<?php

namespace App\Tests\Behavioral_Patterns\Mediator;

use App\Behavioral_Patterns\Mediator\Classes\Component1;
use App\Behavioral_Patterns\Mediator\Classes\Component2;
use App\Behavioral_Patterns\Mediator\Classes\ConcreteMediator;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{

    public function test_when_component2_doC_will_inform_mediator(){
        //GIVEN
        $component1 = new Component1();
        $component2 = new Component2();
        $mediator = $this->getMockBuilder(ConcreteMediator::class)->onlyMethods(['notify'])
            ->setConstructorArgs([$component1,$component2])->getMock();
        //THEN
        $mediator->expects($this->once())->method('notify')->with($component2,"C");
        //WHEN
        $component2->doC();
    }

    public function test_if_mediator_receives_event_A_will_trigger_doC_on_component2(){
        //GIVEN
        $component1 = $this->createMock(Component1::class);
        $component2 = $this->createMock(Component2::class);
        $mediator = new ConcreteMediator($component1,$component2);
        //THEN
        $component2->expects($this->once())->method('doC');
        //WHEN
        $mediator->notify($component1,'A');
    }

}