<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('img/logo/icono.png') }}" type="image/x-icon">

    <title>Dashboard | @yield('titulo')</title>

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icon/all.css') }}">
    @section('css')
    @show
</head>
<body>

@include('dashboard.plantilla.navbar')

<div class="container-side">
    <aside class="menu">
        @if (Auth::user()->pk_permisos == 1)
            @include('dashboard.plantilla.sidebar-admin')
        @endif
        @include('dashboard.plantilla.sidebar-comite')
    </aside>
</div>

<div class="container-dash">
    
    <div class="container">
        <div class="columns is-mobile is-centered">
            <div class="column is-11" id="contenido">
                @section('contenido')
                @show
            </div>
        </div>
    </div>

</div>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/dashboard/menu.js') }}"></script>
@section('scripts')
@show
</body>
</html>