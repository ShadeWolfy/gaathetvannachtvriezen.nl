<?php
$api_url = 'http://api.weatherapi.com/v1/forecast.json?key=4d29cae584564443b5e112811231209&q=Amsterdam&days=1&aqi=no&alerts=no';

$response = file_get_contents($api_url);

if ($response === false) {
    die('fout bij het ophalen van gegevens van de API');
}

$data = json_decode($response,true);

$mintemp = ($data['forecast']['forecastday'][0]['day']['mintemp_c']);
$hum = ($data['forecast']['forecastday'][0]['day']['avghumidity']);

//testgetallen
//$mintemp = -3;
//$hum = 70;

$mintemp = (int)$mintemp;
