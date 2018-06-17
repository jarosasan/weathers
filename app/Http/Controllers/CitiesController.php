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
        session(['key'=> $request->key]);
        
        return response()->json(['city'=> $city->name]);
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
        $cities = City::all();
        $city = City::where('name', '=' , $city)->get();
//        dd($city);
        return view('info', ['cities'=>$cities, 'data'=>$data, 'city' => $city]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = City::findOrFail($id);
        $city->delete();
        return redirect()->route('home');

    }
}
