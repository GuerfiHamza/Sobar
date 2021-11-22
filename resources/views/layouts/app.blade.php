<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Sobar - @yield('title')</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="icon" type="image/png" href="../img/favicon.png"/>

    </head>
    <body class="antialiased">
        @yield('content')

        <script src="{{ asset('js/app.js') }}"></script>
        @yield('scripts')
    </body>
    </html>

