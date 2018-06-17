@extends('welcome')
@section('content')
<div class="tab-content">
	<h3>Add a new city.</h3>
	<div class="" id="Home" role="tabpanel" aria-labelledby="home-tab">
		<form action="{{route('store')}}" method="post">
			@csrf
			<div class="input-group mb-3">
				<label for="key-input"></label>
				<input type="text" id="key-input" name="key" class="form-control" placeholder=" Your API key from openweathermap.org" value="{{session('key')}}" >
			</div>
			<div class="">
				<p>You can get an API Key from the <a href="https://openweathermap.org/appid" target="_blank">OpenWeatherMap.org</a></p>
			</div>
			<div class="input-group mb-3">
				<input type="text" name="name" class="form-control" placeholder="City" aria-label="Recipient's username" aria-describedby="basic-addon2">
				<div class="input-group-append">
					<button  class="btn btn-success btn-submit" style="color:white;" type="button">&#10003;</button>
				</div>
			</div>
		</form>
		<div class="errorContent" hidden>
			<p class="text-center alert alert-danger"></p>
		</div>
	</div>
</div>
@endsection