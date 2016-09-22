<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 21.09.2016
 * Time: 22:09
 */

namespace App\Weather\DataProvider;


class YandexDataProvider extends AbstractDataProvider
{

    function fetchData()
    {
        $data = file_get_contents('http://yandex.ru/weather/data');
        
        return $data;
    }
}