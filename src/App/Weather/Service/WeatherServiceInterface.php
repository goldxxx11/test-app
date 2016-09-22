<?php

namespace App\Weather\Service;


interface WeatherServiceInterface
{
    /**
     * @return array
     */
    public function getDaily();

    /**
     * @return array
     */
    public function getWeekly();
}