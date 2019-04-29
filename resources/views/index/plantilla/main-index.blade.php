<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="{{ asset('img/logo/icono.png') }}" type="image/x-icon">
        <title>Tecmimun | @yield('titulo')</title>

        <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">
        <link rel="stylesheet" href="{{ asset('css/ui-kit.css') }}">
        <link rel="stylesheet" href="{{ asset('css/icon/all.css') }}">
        @section('css')
        @show
    </head>
    <body>
        @include('index.plantilla.loader')

        @include('index.plantilla.carrousel')
        @include('index.plantilla.countdown')

        @section('body')
        @show

        @include('index.plantilla.footer')

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/slider-uikit/uikit.js') }}"></script>
        
        @section('scripts')
        @show
    </body>
</html>