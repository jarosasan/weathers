<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <title>Weather</title>
        <!-- Fonts -->
	    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	    <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
	    <!-- Scripts -->
	    <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="container-fluid header">
            <div class="row">
	            <div class="container">
		            <div class="col top">
			            <h1>Weather for WeatherOpenMap</h1>
		            </div>
	            </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col top-nav">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link " name="Home" href="{{route('home')}}" role="tab" aria-selected="true">Home</a>
                        </li>
                        @if(!empty($cities))
                            @foreach($cities as $city)
                                <li class="nav-item">
                                    <a class="nav-link" name="{{$city->name}}"  href="{{route("show", $city->name)}}" role="tab" aria-selected="">{{$city->name}}</a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col content">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
