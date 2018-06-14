<?php
    /**
     * Created by PhpStorm.
     * User: jaroslavlomecki
     * Date: 6/14/18
     * Time: 1:59 PM
     */
    
    namespace App\Providers;
    
    use Illuminate\Support\ServiceProvider;
    
    
    class WeatherApiServiceProvider extends ServiceProvider
    {
        public function register()
        {
            $this->app->bind('weatherApi', 'App\Services\WeatherApiService');
        }
        
    }