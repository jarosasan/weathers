<?php

namespace App\Http\Controllers;

use App\City;
use App\Http\Requests\CityStoreRequest;
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
        return view('form', ['cities'=>$cities]);
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
    public function store(CityStoreRequest $request)
    {
        $responseFromApi = WeatherApiService::GetCity($request->name, $request->key);
        $city = new City();
        $city->name = $responseFromApi->list[0]->name;
        $city->save();
        $key = $request->key;
        $cities = City::all();
//        response()->json(['cities'=>$cities, 'key'=>$key]);
//
//        return view('welcome', ['cities'=>$cities, 'key'=>$key]);
    
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show($city)
    {
    
        $data = WeatherApiService::GetWeather($city, '32d8a01d1c19b2a485088bd43bfa12a0');
//        dd($data);
        $cities = City::all();
        return view('info', ['cities'=>$cities, 'data'=>$data]);
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
        echo 'labukas';
    }
}
