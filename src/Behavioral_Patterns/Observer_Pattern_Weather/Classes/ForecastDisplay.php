<?php


namespace App\Behavioral_Patterns\Observer_Pattern_Weather\Classes;


use App\Behavioral_Patterns\Observer_Pattern_Weather\Interfaces\DisplayElement;
use App\Behavioral_Patterns\Observer_Pattern_Weather\Interfaces\Subject;
use SplSubject;

class ForecastDisplay implements \SplObserver,DisplayElement
{
    /**
     * The subject that emits the notifications
     * @var Subject
     */
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
        $sentence = "I am the Forecast Display with temp=".$this->temperature.
            " and humidity=".$this->humidity. " and pressure =".$this->pressure. "\n";

        echo $sentence;
        return $sentence;
    }

    public function update(SplSubject $subject, string $event = null, $data = null): string
    {
        $this->temperature = $data["temperature"];
        $this->humidity = $data["humidity"];
        $this->pressure = $data["pressure"];
        return $this->displayElement();

    }

}