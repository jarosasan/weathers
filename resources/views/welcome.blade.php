<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <title>Weather</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Test</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('home')}}" role="tab" aria-selected="true">Home</a>
                        </li>
                        @if(!empty($cities))
                            @foreach($cities as $city)
                                <li class="nav-item">
                                    <a class="nav-link"  href="{{route('show', $city->name)}}" role="tab" aria-selected="false">{{$city->name}}</a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                    <br>
                    @yield('content')
                </div>
            </div>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
