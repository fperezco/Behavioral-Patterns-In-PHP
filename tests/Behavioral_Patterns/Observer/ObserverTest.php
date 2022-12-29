<?php

namespace App\Tests\Behavioral_Patterns\Observer;

use App\Behavioral_Patterns\Observer\Classes\ConcreteObserverA;
use App\Behavioral_Patterns\Observer\Classes\ConcreteObserverB;
use App\Behavioral_Patterns\Observer\Classes\Subject;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function test_that_concrete_observer_B_is_notified_when_subject_changes(){
        //GIVEN
        $subject = new Subject();
        $o2 = $this->createMock(ConcreteObserverB::class);
        $subject->attach($o2);
        //THEN
        $o2->expects($this->once())->method('update');
        //WHEN
        $subject->someBusinessLogic();
    }

    public function test_that_concrete_observer_B_is_not_notified_if_it_is_detached_and_subject_changes(){
        //GIVEN
        $subject = new Subject();
        $o2 = $this->createMock(ConcreteObserverB::class);
        $subject->attach($o2);
        $subject->detach($o2);
        //THEN
        $o2->expects($this->never())->method('update');
        //WHEN
        $subject->someBusinessLogic();
    }
}