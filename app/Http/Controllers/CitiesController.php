<?php

namespace App\Http\Controllers;

use App\ApiKey;
use App\City;
use App\Http\Requests\CityStoreRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use App\Facades\WeatherApiService;
use Illuminate\Support\Facades\Response;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();
        return view('welcome', ['cities'=>$cities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = WeatherApiService::GetWeather($request->name, $request->key);
        $city = new City();
        $city->name = ucfirst($request->name);
        $city->save();
        $request->session()->put('key', $request->key);
        dd($response);
      
//        return response()->json(['success'=>' rr Your enquiry has been successfully submitted!']);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
        dd(WeatherApiService::GetWeather('vilnius', '32d8a01d1c19b2a485088bd43bfa12a0'));
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        //
    }
}
