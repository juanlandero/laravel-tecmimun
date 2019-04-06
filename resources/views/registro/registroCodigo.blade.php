<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tecmimun | Registro</title>
    <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icon/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ui-kit.css') }}">
    <style>
    body, html, section{
        margin: 0px;
        height: 100%;
    }
    #codigo {
        text-align: center;
        background-color: transparent;
        color: #78a42e;
    }
    </style>
</head>
<body>
 

<section class="section">
    <div class="container">

        <div class="columns is-mobile is-centered is-vcentered" style="height: 500px;">

            <div class="column is-6-desktop is-10-mobile has-text-centered">
                
                <img src="{{ asset('img/logo.png') }}" width="40%">
                <p class="title is-size-1-desktop has-text-success">Bienvenido</p>
  
                <form method="post" id="codigo" class="columns is-centered">
                    @csrf
                    <div class="column is-12-mobile is-8-desktop">
                        <input class="input is-large is-primary is-rounded" name="codigo" id="codigo" type="text" autocomplete="off" maxlength="10" required>
                    </div>
                    <div class="column is-4-desktop">
                        <button class="button is-primary is-rounded is-large is-outlined" type="submit">
                            <span class="icon is-small">
                                <i class="fas fa-check"></i>
                            </span>
                            <span>Confirmar</span>
                        </button>
                    </div>
                </form>
                
            </div>
        </div>  
    </div>
</section>



<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/ajax.js') }}"></script>
<script src="{{ asset('js/slider-uikit/uikit.js') }}"></script>
</body>
</html>