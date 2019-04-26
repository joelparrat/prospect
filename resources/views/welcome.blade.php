<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Carnet de prospects</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="js/parallax.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="centered" data-relative-input="true" id="scene">
                    <div style="padding-top: 20%; padding-left: 5%;" data-depth="0.25"><img src="backgroundpara.jpg"></div>
                    <div style="padding-top: 45%; padding-left: 32%;" data-depth="0.8"><img src="serveuroperationnel.png"></div>
                </div>
        </div>
    </body>
</html>
