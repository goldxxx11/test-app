<?php

namespace App\Weather\DataProvider;


abstract class AbstractDataProvider implements WeatherDataProviderInterface
{
    /**
     * @var array
     */
    protected $data = [];

    abstract function fetchData();

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    protected function toString()
    {
        $result = '';
        foreach ($this->data as $row) {
            $result = $result . ', ' . $row;
        }

        return $result;
    }

    protected function validate()
    {
        $this->data = $this->fetchData();

        return isset($this->data);
    }

    private function fuckThisCode()
    {
        die('Умри сука!');
    }

    public function check()
    {
        if (!$this->validate()) {
            $this->fuckThisCode();
        }
    }
}