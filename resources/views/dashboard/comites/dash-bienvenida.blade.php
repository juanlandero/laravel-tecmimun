<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido</title>

    <link rel="stylesheet" href="{{ asset('css/ui-kit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icon/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

</head>
<body>

<section class="section">
    <div class="container">
        <div class="columns is-mobile is-centered is-vcentered" style="height: 500px">
            <div class="column is-6-desktop is-8-tablet is-10-mobile has-text-centered">
    
                <p class="title is-size-1-desktop has-text-primary">Ingresa tu <span class="has-text-success">código</span></p><br>
                <form id="checkin" method="POST" class="columns is-centered">
                    @csrf
                    <div class="column is-8-desktop is-8-tablet is-12-mobile">
                        <input class="input is-large is-primary is-rounded" name="codigo" id="codigo" type="text" maxlength="8" required autocomplete="off">
                    </div>
                    <div class="column is-4-desktop is-3-tablet is-12-mobile">
                        <button type="submit" class="button is-primary is-rounded is-large is-outlined">Continuar</button>
                    </div>
                </form>
               <!--pendeiente borrar este boton y el script que lo alimenta-->
                <button class="button is-success is-outlined" id="numero"></button>
            </div>    
        </div>
    </div>

    <svg height="10mm" width="100%" style="position: fixed;bottom: 0px;left: 0px;right: 0px;" viewBox="0 0 100 10">
        <polygon style="fill:#118b42;" points="0 2, 30 10, 0 10"></polygon>
        <polygon style="fill:#075d2a;" points="20.5 7.5, 30 10, 0 10"></polygon>

        <polygon style="fill:#04305c;" points="100 0, 100 10, 10 10"></polygon>
    </svg>

</section>

@include('dashboard.comites.modal.bienvenida-true')
@include('dashboard.comites.modal.bienvenida-wait')

<script src="{{ asset('js/slider-uikit/uikit.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/split.js') }}"></script>
<script src="{{ asset('js/tw.js') }}"></script>
<script src="{{ asset('js/dashboard/dash-bienvenida.js') }}"></script>

</body>
</html>