<?php

include 'vendor/autoload.php';

$config = require_once "config/container.php";
$container = new \Eva\Container\Container($config);
new Eva($container);



