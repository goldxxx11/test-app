<?php

namespace App\Weather\DataProvider;


class FileDataProvider extends AbstractDataProvider
{
    function fetchData()
    {
        $data = file("data.txt");
        
        return $data;
    }
}