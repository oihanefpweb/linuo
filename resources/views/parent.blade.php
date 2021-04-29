<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LinUO</title>

        <!-- CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/parent.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/burbujas.css') }}" rel="stylesheet" type="text/css">




    </head>
    <body>
        <header>
            <div class="header-menu-l">
                <a href="{{('/')}}"><input type="button" class="btn text-light" id="button-r" value="HOME"></div></a>
            </div>
            <div class="header-logue">
                <a href="{{('/')}}"><img src="{{asset('images/logo/LinUO.png')}}" id="logue" alt="Logotipo de LinUO"></img></a>
            </div>
            <div class="header-menu-r">
                <input type="button" class="btn text-light" id="button-l" value="CONTÁCTANOS"></div>
            </div>
        </header>
        <div  class="content">
            @yield('content')
        </div>
        <footer>
                <div class="us">
                    <p>UNAI & OIHANE</p>
                </div>
        </footer>
        
        <!-- JS (jquery and bootstrap)-->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
