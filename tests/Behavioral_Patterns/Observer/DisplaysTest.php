<?php

namespace App\Tests\Behavioral_Patterns\Observer;

use App\Behavioral_Patterns\Observer_Pattern_Weather\Classes\ForecastDisplay;
use App\Behavioral_Patterns\Observer_Pattern_Weather\Classes\WeatherData;
use PHPUnit\Framework\TestCase;

class DisplaysTest extends TestCase
{
    public function test_that_forecast_update_is_called_on_setMeasurement(){
        //GIVEN
        $temperature = 23;
        $humidity = 15;
        $pressure = 12;
        $weatherData = new WeatherData();
        $forecastMockup = $this->getMockBuilder(ForecastDisplay::class)
            ->setConstructorArgs(array($weatherData))
            ->getMock();

        $data = array("temperature" => $temperature,"humidity" => $humidity, "pressure" => $pressure);
        $event = '*';
        //EXPECT
        $forecastMockup->expects($this->once())
            ->method('update')
            ->with($weatherData,$event,$data);

        //WHEN
        $weatherData->setMeasurements($temperature,$humidity,$pressure);
    }

    public function test_that_forecast_update_is_not_called_on_setMeasurement_if_its_has_been_removed(){
        //GIVEN
        $temperature = 23;
        $humidity = 15;
        $pressure = 12;
        $weatherData = new WeatherData();
        $forecastMockup = $this->getMockBuilder(ForecastDisplay::class)
            ->setConstructorArgs(array($weatherData))
            ->getMock();

        //EXPECT
        $forecastMockup->expects($this->never())
            ->method('update')
            ->with($temperature,$humidity,$pressure);

        //WHEN
        $weatherData->detach($forecastMockup);
        $weatherData->setMeasurements($temperature,$humidity,$pressure);
    }
}