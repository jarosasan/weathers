<?php
    /**
     * Created by PhpStorm.
     * User: jaroslavlomecki
     * Date: 6/14/18
     * Time: 1:34 PM
     */
    
    namespace App\Facades;
    
    use Illuminate\Support\Facades\Facade;
    
    class WeatherApiService extends Facade
    {
        protected static function getFacadeAccessor()
        {
            return 'weatherApi';
        }
    
    }