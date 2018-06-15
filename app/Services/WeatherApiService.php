<?php
    /**
     * Created by PhpStorm.
     * User: jaroslavlomecki
     * Date: 6/14/18
     * Time: 11:34 AM
     */
    
    namespace App\Services;
    
    use GuzzleHttp\Client as Client;
    
    
    class WeatherApiService
    {
        public function GetWeather($city, $key)
        {
            $client = new Client();
            $response = $client->get('http://api.openweathermap.org/data/2.5/weather?q='.$city.'&units=metric&appid='.$key);
            $result = json_decode($response->getBody()->getContents());
            return $result;
        }
        public function GetCity($city, $key)
        {
            $client = new Client();
            $response = $client->get('http://api.openweathermap.org/data/2.5/find?q='.$city.'&type=accurate&appid='.$key);
            $result = json_decode($response->getBody()->getContents());
            return $result;
        }
    }