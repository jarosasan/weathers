@extends('welcome')
@section('content')
	<div class="tab-content">
		<div id="{{$data->name}}" >
			<h3>{{$data->name}} .{{$data->sys->country}}<i class="owi owi-{{$data->weather[0]->icon}} owf-3x"></i> </h3>
			<p>Sunrise time: {{date("H:i:s", $data->sys->sunrise)}}</p>
			<p>Sunset time: {{date("H:i:s", $data->sys->sunset)}}</p>
			<p>Weather condition: {{$data->weather[0]->main}} ({{$data->weather[0]->description}})</p>
			<p>Temperature: {{$data->main->temp}} &#8451</p>
			<p>Humidity value: {{$data->main->humidity}}%</p>
			<p>Pressure: {{$data->main->pressure}} hPa</p>
			<p>Wind speed: {{$data->wind->speed}} mps</p>
			<p>Cloudiness: {{$data->clouds->all}}%</p>
			<p>Last time when data was updated {{date("Y-m-d H:i", $data->dt)}} </p>
		</div>
		<div class="div">
			<form action="{{route('delete', $city[0]->id)}}" method="post">
				@csrf
				<div class="form-group">
					<input type="hidden" name="_method" value="delete">
					<button type="submit" class="btn btn-danger btn-sm">Delete City</button>
				</div>
			</form>
		</div>
	</div>
@endsection