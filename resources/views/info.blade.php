@extends('welcome')
@section('content')
	<p>{{$data->name}} .{{$data->sys->country}}</p>
	<p>Weather condition: {{$data->weather[0]->main}} ({{$data->weather[0]->description}})</p>
	<p>Sunrise time {{date("Y/m/d H:i:s", $data->sys->sunrise)}} - Sunset time {{date("H:i:s", $data->sys->sunset)}}</p>
	<p>Temperature: {{$data->main->temp}} &#8451</p>
	<p>Humidity value: {{$data->main->humidity}}</p>
	<p>Pressure: {{$data->main->pressure}} hPa</p>
	<p>Wind speed: {{$data->wind->speed}} mps</p>
	<p>Cloudiness: {{$data->clouds->all}}%</p>
	<p>Last time when data was updated {{date("Y-m-d H:i", $data->dt)}} </p>

@endsection