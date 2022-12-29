<?php


namespace App\Behavioral_Patterns\Observer_Pattern_Weather\Classes;


use App\Behavioral_Patterns\Observer_Pattern_Weather\Interfaces\DisplayElement;
use SplObserver;
use SplSubject;

class CurrentConditionsDisplay implements SplObserver,DisplayElement
{
    private $subject;
    private $temperature;
    private $humidity;
    private $pressure;

    public function __construct(SplSubject $subject){
        $this->subject = $subject;
        $subject->attach($this);
    }

    public function displayElement(): string
    {
        echo "I am the CurrentConditionDisplay with temp=".$this->temperature.
            " and humidity=".$this->humidity;
    }

    public function update(SplSubject $repository, string $event = null, $data = null): string
    {
        $this->temperature = $data["temperature"];
        $this->humidity = $data["humidity"];
        $this->pressure = $data["pressure"];
        return $this->displayElement();

    }

}


