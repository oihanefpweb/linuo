<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>LinUO</title>
        <!-- CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/parent.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/contacto.css') }}" rel="stylesheet" type="text/css">

        <link href="{{ asset('css/burbujas.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/modal-contacto.css') }}" rel="stylesheet" type="text/css">

    </head>
    <body>
        <header>
            <div class="header-menu-l">
                <a href="{{('/')}}">HOME</a>
            </div>
            <div class="header-logue">
                <a href="{{('/')}}"><img src="{{asset('images/logo/LinuoRB.png')}}" id="logue" alt="Logotipo de LinUO"></img></a>
            </div>
            <div class="header-menu-r">
            <a href="{{('/contacto')}}">CONTACT US</a>
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
        <script src="https://cdn.jsdelivr.net/jquery.typeit/3.0.1/typeit.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script src="/js/contacto.js" ></script>


    </body>
</html>
