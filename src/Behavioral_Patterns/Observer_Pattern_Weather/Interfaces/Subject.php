<?php

namespace App\Behavioral_Patterns\Observer_Pattern_Weather\Interfaces;

interface Subject
{
    public function registerObserver(Observer $observer);
    public function removeObserver(Observer $observer);
    public function notifyObservers();
}