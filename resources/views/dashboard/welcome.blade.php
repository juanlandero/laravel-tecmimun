<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido</title>

    <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ui-kit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icon/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

</head>
<body>

<section class="section">
    <div class="container">
        <div class="columns is-mobile is-centered is-vcentered" style="height: 500px">
            <div class="column is-6-desktop is-10-mobile has-text-centered">
    
                <p class="title is-size-1-desktop has-text-primary">Ingreza tu <span class="has-text-success">código</span></p><br>
                <form id="checkin" method="POST" class="columns is-centered">
                    @csrf
                    <input type="hidden" name="comite" value="{{ Auth::user()->email }}">
                    <div class="column is-8">
                        <input class="input is-large is-primary is-rounded" name="codigo" id="codigo" type="text" maxlength="8" required autocomplete="off">
                    </div>
                    <div class="column is-4">
                        <button type="submit" class="button is-primary is-rounded is-large is-outlined">Continuar</button>
                    </div>
                </form>

            </div>    
        </div>
    </div>
</section>

@include('dashboard.modal_welcome')
@include('dashboard.modal_espera')

<script src="{{ asset('js/slider-uikit/uikit.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/split.js') }}"></script>
<script src="{{ asset('js/tw.js') }}"></script>
<script src="{{ asset('js/welcome.js') }}"></script>

</body>
</html>