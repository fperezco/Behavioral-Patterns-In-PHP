<?php


namespace App\Behavioral_Patterns\Observer_Pattern_Weather\Interfaces;

interface Observer
{
    public function update($temp,$humidity,$pressure);
}