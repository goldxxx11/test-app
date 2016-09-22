<?php

namespace App\Weather;


class WeatherData
{
    protected $temperature;
    protected $humidity;
    protected $atmospherePressure;

    /**
     * Функция вызываеться в момент создания нового объекта.
     * WeatherData constructor.
     * @param $temperature
     * @param $humidity
     * @param $atmospherePressure
     */
    public function __construct($temperature, $humidity, $atmospherePressure)
    {
        $this->temperature = $temperature . ' c';
        $this->atmospherePressure = $atmospherePressure;
        $this->humidity = $humidity;
    }

    public function getTemperature()
    {
        return $this->temperature;
    }
    public function getHumidity()
    {
        return $this->humidity;
    }
    public function getAtmospherePressure()
    {
        return $this->atmospherePressure;
    }
}
