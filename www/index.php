<?php

//Вариант задания: 12

namespace App;

require_once 'ElasticExample.php';
require_once 'ClientFactory.php';
require 'vendor/autoload.php';

use App\ElasticExample;

$elastic = new ElasticExample();
echo $elastic->indexDocument('geolocation', 1, ['country' => 'Russia', 'region' => 'Kaliningrad Oblast', 'city' => 'Kaliningrad']);
echo $elastic->search('geolocation', ['city' => 'Kaliningrad']);

echo $elastic->indexDocument('geolocation', 2, ['country' => 'Czechia', 'region' => 'Ústí nad Labem Region', 'city' => 'Žatec']);
echo $elastic->search('geolocation', ['country' => 'Czechia']);