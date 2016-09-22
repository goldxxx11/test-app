<?php

namespace App\Weather;


class Weather
{
    /**
     * метод возращающий массив объектов
     * @return WeatherData[]
     */
    public function getDailyWeather()
    {
        $data = [];
        $data['6:00'] = new WeatherData('+20', '85', '777');
        $data['12:00'] = new WeatherData('+30', '85', '777');
        $data['18:00'] = new WeatherData('+30', '85', '777');

        return $data;
    }
}
