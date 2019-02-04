<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lara Shop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{ mix('css/materialize.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <header>
            @include('includes.navbar')
        </header>
        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>
        
        @include('includes.footer')
        
        <script type="text/javascript" src="{{ mix('js/materialize.min.js') }}"></script>
        <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    </body>
</html>