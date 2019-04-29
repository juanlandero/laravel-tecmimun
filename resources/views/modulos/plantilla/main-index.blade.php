<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('img/logo/icono.png') }}" type="image/x-icon">
    <title>@yield('titulo')</title>

    <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icon/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/popover.css') }}">
    @section('css')
        
    @show
</head>
<body>
    <section class="hero content">
        <div style="position:absolute; right: 5%; top:25px; color: brown" class="has-text-green">
            @include('modulos.plantilla.navbar')
        </div>
        @section('contenido-navbar')
            
        @show
    </section>

    @section('body')
    @show

    @include('modulos.plantilla.footer')

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modulos/menu.js') }}"></script>
    @section('scripts')
        
    @show
</body>
</html>