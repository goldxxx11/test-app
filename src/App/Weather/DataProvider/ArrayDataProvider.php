<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 21.09.2016
 * Time: 22:19
 */

namespace App\Weather\DataProvider;


use App\Weather\WeatherData;

class ArrayDataProvider extends AbstractDataProvider
{

    function fetchData()
    {
        $data = [];
        $data['6:00'] = new WeatherData('+30', '85', '777');
        $data['12:00'] = new WeatherData('+30', '85', '777');
        $data['18:00'] = new WeatherData('+30', '85', '777');

        return $data;
    }
}