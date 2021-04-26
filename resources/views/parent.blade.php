<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LinUO</title>

        <!-- CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/parent.css') }}" rel="stylesheet" type="text/css">


    </head>
    <body>
        <header>
            <div class="header-menu-l">
                <input type="button" class="btn text-light" id="button-r" value="HOME"></div>
            </div>
            <div class="header-logue">
                <a href="#Index" id="logue">LinUO</a>
            </div>
            <div class="header-menu-r">
                <input type="button" class="btn text-light" id="button-l" value="CONTÁCTANOS"></div>
            </div>
        </header>
        <div  class="content">
            @yield('content')
        </div>
        <footer></footer>
        
        <!-- JS (jquery and bootstrap)-->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
