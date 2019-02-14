<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tecmimun | Registrado</title>
    <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">
    <style>
    body, html{
        margin: 0px;
        height: 100%;
    }
    </style>
</head>
<body>
   
<section class="" style="background-image: radial-gradient(circle at 50px 50px, yellow, green); height: 100%">

    <div class="columns is-vcentered has-text-centered" style="height: 100%">
        <div class="column">
            <p class="title is-1">Tecmimun 2019</p>
            <br><br>
            <p class="title is-1">Te has registrado con exito</p>

        <p class="title is-2">{{ $alumno->nombre }}</p>
        <p class="title is 3">Representarás al país: {{ $alumno->pais }}, en el comité: {{ $alumno->comite }}</p>
        <p><a href="{{ route('index') }}" class="button is-rounded is-primary">Ir al inicio</a></p>
        </div>
    </div>      

</section>
</body>
</html>