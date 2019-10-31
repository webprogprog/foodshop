<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        @yield('style')
    </head>
    <body>
        @yield('title-page')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>