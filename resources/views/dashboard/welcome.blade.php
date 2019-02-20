<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido</title>

    <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">
    <style>
    body, html, section{
        margin: 0px;
        height: 100%;
    }
    html{
        background-image:linear-gradient(141deg, #09203F, #537895)
    }

    .circle{
        position: absolute;
        right: -200px;
        top: -200px;
        width: 600px;
        height: 600px;
        border-radius: 50%;
        color: black;
        background-color: blueviolet;
    }

    </style>
</head>
<body style="background-color: ">

<section class="container">
   <div class="columns is-mobile" style="top: 300px; position: relative;">
        <div class="column is-1"></div>
        <div class="column is-6">

            <p class="title is-size-1-desktop has-text-black">BIENVENIDO</p><br>
            <form action="" class="columns">
                @csrf
                <div class="column is-8">
                    <input class="input is-large is-success is-rounded" type="text">
                </div>
                <div class="column is-4">
                    <button class="button is-success is-rounded is-large is-outlined">ENTRAR</button>
                </div>
            </form>
        </div>

        
   </div>
</section>
    
   <div class="circle"></div>
</body>
</html>