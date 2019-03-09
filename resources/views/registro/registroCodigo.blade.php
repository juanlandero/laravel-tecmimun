<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tecmimun | Registro</title>
    <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icon/all.css') }}">
    <style>
    body, html, section{
        margin: 0px;
        height: 100%;
    }
    .code{
        text-align: center;
        letter-spacing: 0.2em;
    }
    </style>
</head>
<body>
 

<section class="container">
    <div class="columns is-vcentered has-text-centered is-mobile" style="height: 100%">

        <div class="column">
            <img src="{{ asset('img/logo.png') }}" width="17%">
            <p class="title is-3-desktop">Bienvenido a Tecmimun 2019</p>
            <div class="columns is-centered">  
                <div class="column is-3">
                    <form method="post" id="codigo">
                        @csrf
                        <div class="field">
                            <div class="control">
                                <input class="input is-large is-success is-rounded code" name="codigo" type="text" autocomplete="off" placeholder="Código" maxlength="10">
                            </div>
                        </div>
                        <button class="button is-primary is-medium" type="submit">
                            <span class="icon is-small">
                                <i class="fas fa-check"></i>
                            </span>
                            <span>Confirmar</span>
                        </button>
                    </form>
                    <div class="notification" style="display: none" id="msn">
                        <button class="delete" id="cerrar"></button>
                        <span id="result"></span>
                    </div>  
                    
                </div>
            </div>

            
        </div>
    </div>

</section>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/ajax.js') }}"></script>
<script>
$(document).ready(function(){
    $('#cerrar').click(function(){
        $('#msn').css('display', 'none');
    });
});
</script>
</body>
</html>