<?php

namespace App\Tests\Behavioral_Patterns\Memento;

use App\Behavioral_Patterns\Memento\Classes\CarMemento;
use PHPUnit\Framework\TestCase;

class MementoPatternTest extends TestCase
{
    public function test_that_class_that_implements_memento_can_store_status_and_restore_later()
    {
        //GIVEN
        $car = new CarMemento("Chevrolet Cruze",1600);
        $car->setKilometers(10700);
        $carSnapshot = $car->getSnapshot();

        //WHEN
        $car->setKilometers(18000);
        $car->setModel("Chevrolet Cruze second edition");
        $car->setPower(2000);

        $this->assertEquals(18000,$car->getKilometers());
        $this->assertEquals("Chevrolet Cruze second edition",$car->getModel());
        $this->assertEquals(2000,$car->getPower());

        $car->restoreFromSnapshot($carSnapshot);

        //THEN
        $this->assertEquals(10700,$car->getKilometers());
        $this->assertEquals("Chevrolet Cruze",$car->getModel());
        $this->assertEquals(1600,$car->getPower());

    }
}