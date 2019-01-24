@extends('plantilla.second')

@section('titulo', 'Como registrarme?')

@section('body')

@include('plantilla.secondNavbar')

<section class="hero is-primary">
    <div class="hero-body">
        <div class="hero-content">
            <span class="title">¿CÓMO ME REGISTRO?</span>
        </div>
    </div>
</section>

<section class="section">
    <article class="message is-success">     
        <div class="message-body">
            <h1 class="title">MODOS DE REGISTRO</h1>
        </div>
    </article>
    <div class="container">
        <div class="columns">
            <div class="column is-7">
                <p class="subtitle is-size-3-desktop">Para poder participar en el modelo de las Naciones Unidas:
                    Tecmimun 2019, puedes registrarte de dos formas posible:</p><br><br>
                    <div class="columns has-text-centered">
                        <div class="column is-6">
                            <p class="title is-size-4-desktop">Registro completo</p>
                            <p class="subtitle is-size-4-desktop">
                                Debes registrar todos tus datos, los cuales será requeridos por medio de un formulario.
                                Si eres delegado independiente esta es la opción correcta.
                            </p>
                        </div>
                        <div class="column is-6">
                            <p class="title is-size-4-desktop">Pre-registro</p>
                            <p class="subtitle is-size-4-desktop">
                                Un pre-registro indica que ya se ha iniciado un registro por parte de tu coordinador, 
                                cual te proporcionará un código para que puedas finalizar y confirmar todos tus datos.
                            </p>
                        </div>
                    </div>
            </div>
            <div class="column is-5">
                <img class="image" src="https://bulma.io/images/placeholders/320x480.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="section">
        <article class="message is-success">     
            <div class="message-body">
                <h1 class="title">FORMULARIO</h1>
            </div>
        </article>
        <div class="container">
            <div class="tabs is-fullwidth">
                <ul>
                    <li >
                        <a>
                            <span class="icon"><i class="fas fa-address-card" aria-hidden="true"></i></span><span>Registro completo</span>
                        </a>
                    </li>
                    <li class="is-active">
                        <a>
                            <span class="icon"><i class="fas fa-qrcode" aria-hidden="true"></i></span><span>Registro con código</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

<section class="section">
    <article class="message is-success">     
        <div class="message-body">
            <h1 class="title">CONFIRMACIÓN</h1>
        </div>
    </article>
    <div class="container">
        <div class="columns">
            <div class="column is-7">
                <p class="subtitle is-size-3-desktop">
                    Al finalizar tu registro, podrás ver una hoja de resumen, en la cual se muestran
                    los datos que hemos guardado de tu registro.
                </p>
            </div>
            <div class="column is-5">
                <img class="image" src="https://bulma.io/images/placeholders/360x640.png" alt="">
            </div>
        </div>
    </div>
</section>


@endsection