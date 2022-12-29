<?php

namespace App\Behavioral_Patterns\Observer_Pattern_Weather\Classes;

use SplObserver;
use SplSubject;

/**
 * PHP tiene varias interfaces integradas (SplSubject, SplObserver)
 * que pueden utilizarse para hacer tus implementaciones del patrón
 * Observer compatibles con el resto del código PHP.
 * Class WeatherData
 * @package App\Weather\Classes
 */
class WeatherData implements SplSubject
{
    /**
     * @var array
     */
    private $observers = array();
    private $temperature;
    private $humidity;
    private $pressure;

    public function __construct(){
        $this->observers = array();
    }

   /*
      OLD MANUAL IMPLEMENTATION, here just for didactic purposes
   public function registerObserver(Observer $observer)
    {
       array_push($this->arrayOfObservers,$observer);
    }

    public function removeObserver(Observer $observer)
    {
        // TODO: Implement removeObserver() method.
        //just for info purpose need to real implementation
        unset($this->arrayOfObservers[0]);
    }

    public function notifyObservers()
    {
        foreach($this->arrayOfObservers as $observer){
            $observer->update($this->temperature,$this->humidity,$this->pressure);
        }
    }*/

    /**
     * Is called everytime the measurementes are updated
     */
    public function measurementsChanged(){
        $this->notify();
    }

    /**
     * Set params of the weather
     * @param $temperature
     * @param $humidity
     * @param $pressure
     */
    public function setMeasurements($temperature,$humidity,$pressure){
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->measurementsChanged();
    }


    /**
     * We can have a list of observers per event, by default event = *
     * @param string $event
     */
    private function initEventGroup($event = "*")
    {
        if (!isset($this->observers[$event])) {
            $this->observers[$event] = [];
        }
    }

    private function getEventObservers($event = "*")
    {
        $this->initEventGroup($event);
        $group = $this->observers[$event];
        $all = $this->observers["*"];
        //return array_merge($group, $all);
        return $group;
    }


    public function attach(SplObserver $observer, $event = "*")
    {
        $this->initEventGroup($event);
        $this->observers[$event][] = $observer;
    }

    public function detach(SplObserver $observer,$event = "*")
    {
        foreach ($this->getEventObservers($event) as $key => $s) {
            if ($s === $observer) {
                unset($this->observers[$event][$key]);
            }
        }
    }

    public function notify($event = "*", $data = null)
    {
        $data = array("temperature" => $this->temperature,"humidity" => $this->humidity, "pressure" => $this->pressure);
        foreach ($this->getEventObservers($event) as $observer) {
            $observer->update($this, $event, $data);
        }
    }
}