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
        <script src="{{ asset('js/index.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/jquery.typeit/3.0.1/typeit.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script src="/js/tilt.js-master/dest/tilt.jquery.min.js" ></script>
    </body>
</html>
