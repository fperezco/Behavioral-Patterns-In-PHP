<?php

namespace App\Behavioral_Patterns\Memento\Classes;

use App\Behavioral_Patterns\Memento\Interfaces\MementoInterface;

class CarMemento implements MementoInterface
{
    private string $model;
    private float $power;
    private float $kilometers;

    public function __construct(string $model, float $power)
    {
        $this->model = $model;
        $this->power = $power;
        $this->kilometers = 0;
    }


    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * @return float
     */
    public function getPower(): float
    {
        return $this->power;
    }

    /**
     * @param float $power
     */
    public function setPower(float $power): void
    {
        $this->power = $power;
    }


    public function getSnapshot(): string
    {
        return serialize($this);
    }

    public function restoreFromSnapshot(string $snapshot): void
    {
        /** @var CarMemento $storedCar */
        $storedCar = unserialize($snapshot);
        $this->setModel($storedCar->getModel());
        $this->setPower($storedCar->getPower());
        $this->setKilometers($storedCar->getKilometers());
    }

    public function setKilometers(float $kilometers): void
    {
        $this->kilometers = $kilometers;
    }

    /**
     * @return float
     */
    public function getKilometers(): float
    {
        return $this->kilometers;
    }
}