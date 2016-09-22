<?php

namespace App\Weather\DataProvider;


interface WeatherDataProviderInterface
{
    /**
     * @return array
     */
    public function getData();
}