<?php

namespace App\Weather\Service;


use App\Weather\DataProvider\WeatherDataProviderInterface;

class WeatherService implements WeatherServiceInterface
{
    protected $dataProvider;

    public function __construct(WeatherDataProviderInterface $dataProvider)
    {
        $this->dataProvider = $dataProvider;
    }

    /**
     * @return array
     */
    public function getDaily()
    {
        return $this->dataProvider->getData();
        // TODO: Implement getDaily() method.
    }

    /**
     * @return array
     */
    public function getWeekly()
    {
        // TODO: Implement getWeekly() method.
    }
}