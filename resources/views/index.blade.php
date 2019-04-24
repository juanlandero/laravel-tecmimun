@extends('plantilla.index')

@section('titulo', 'Inicio')

@section('body')
<style>
.div-loader{
    position: fixed;
    z-index: 10000;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    background-color: white;
    color: #0FC939;
}
#div-loader .position{
    width:100%;
    margin:0 auto;
    left: 50%;
    position: absolute;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}
</style>
@if (session()->has('prueba'))
    {{ session('prueba') }}
    {{ session()->flush() }}
@endif
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: fade; autoplay: true; autoplay-interval: 6000; pause-on-hover: false">

    <ul class="uk-slideshow-items">
        <li>
            <img src="img/slider/slide1.jpg" alt="" uk-cover style="opacity: 0.9">
            <div class="uk-position-center uk-position-small uk-text-center uk-light">
            </div>
        </li>
        <li>
            <img src="img/slider/slide2.jpg" alt="" uk-cover style="opacity: 0.9">
            <div class="uk-position-center uk-position-small uk-text-center">
            </div>
        </li>
        <li>
            <img src="img/slider/slide3.jpg" alt="" uk-cover style="opacity: 0.9">
            <div class="uk-position-center uk-position-small uk-text-center">
            </div>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

    <div class="uk-position-bottom-center uk-position-small">
        <ul class="uk-dotnav uk-hidden-hover">
            <li uk-slideshow-item="0"><a href="#">Item 1</a></li>
            <li uk-slideshow-item="1"><a href="#">Item 2</a></li>
            <li uk-slideshow-item="2"><a href="#">Item 3</a></li>
        </ul>
    </div>

    <div class="uk-position-top" uk-scrollspy="cls:uk-animation-fade; delay: 300" style="z-index: 1000">
        @include('plantilla.navbar')
    </div>
</div>
    
<section class="hero" uk-scrollspy="cls:uk-animation-fade; delay: 500">
    <svg height="100mm" width="100%" style="position: absolute;" viewBox="0 0 100 40">
        <polygon style="fill:#04305c;" points="0,30 0,0 30, 0"></polygon>
        <polygon style="fill:#118b42;" points="0,5 0,0 5, 0"></polygon>
    </svg>
    <div class="hero-body" >
        <br><br>
        <div class="container">
            <div class="columns has-text-centered">
                <div class="column">
                    <h1 class="title is-size-1-desktop  has-text-primary">Tecmimun 2019</h1>
                    <p class="sub-title is-size-3-desktop has-text-success">24 de Mayo 2019</p>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container">
            <div uk-countdown="date: 2019-05-24T08:00:00" class="columns is-centered is-mobile">
                <div class="column is-2-desktop is-4-mobile has-text-centered">
                    <span class="box box-clock title is-size-1-desktop uk-countdown-number uk-countdown-days"></span>
                    <p class="heading has-text-success">Días</p>
                </div>
                <div class="column is-2-desktop is-4-mobile has-text-centered">
                    <span class="box box-clock title is-size-1-desktop uk-countdown-number uk-countdown-hours"></span>
                    <p class="heading has-text-success">Horas</p>
                </div>
                <div class="column is-2-desktop is-4-mobile has-text-centered">
                    <span class="box box-clock title is-size-1-desktop uk-countdown-number uk-countdown-minutes"></span>
                    <p class="heading has-text-success">Minutos</p>
                </div>
                <div class="column is-2-desktop is-3-mobile has-text-centered is-hidden-mobile">
                    <span class="box box-clock title is-size-1-desktop has-text-success uk-countdown-number uk-countdown-seconds"></span>
                    <p class="heading has-text-success">Segundos</p>
                </div>
            </div>
        </div>
    </div>
    <svg height="10mm" width="100%" style="position: relative; bottom: 49px;" viewBox="0 0 100 15"> 
        <polygon style="fill:#118b42;" points="100 15,100 0,85 15"></polygon>
    </svg>
</section>
<!-- loader -->
<div class="div-loader" id="div-loader">
    <div class="position">
        <div class="columns is-centered is-mobile" >
            <div class="column is-4-desktop is-8-tablet is-8-mobile">
                <img src="{{ asset('img/logo/logo.png') }}">
            </div>
        </div>
        <br>
        <div class="columns is-centered is-mobile">
            <div class="column is-10">
                <progress class="progress is-small is-success" max="100"></progress>
            </div>
        </div>
    </div>
</div>


<!-- carta de bienvenida -->
 
<section class="hero is-light is-bold">
    <div class="hero-body ">
      <div class="container has-text-centered">
        <h1 class="title has-text-primary">Carta de Bienvenida</h1>
      </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="columns is-vcentered">
           
            <div class="column is-12" uk-scrollspy="cls: uk-animation-slide-right; repeat: false; delay: 700">
                
                <p class="subtitle is-size-4-desktop has-text-black">
                    Queridos delegados, organizadores y advisors asistentes a TECMIMUN 2019 – Campus Villahermosa.
                </p>
                <p class="subtitle is-size-4-desktop has-text-black">
                    Es todo un honor para mí dirigirme a ustedes como la primera Secretaria General del Modelo de las Naciones Unidas de la Universidad Tecmilenio. Mi nombre es Mónica Danaé Juárez López y me siento entusiasmada de ser parte del Comité Organizador de la Primera Edición de TECMIMUN, el cuál se llevará acabo los días 24 y 25 de mayo, 2019.
                </p>
                <p class="subtitle is-size-4-desktop has-text-black">
                    Todo comenzó como iniciativa de cinco alumnos con el sueño de formar parte de la red de Modelos de Naciones Unidas en el estado de Tabasco y ser parte del desarrollo de habilidades de los jóvenes de hoy. Buscamos el apoyo de nuestro Campus y de tal manera, formar el comité organizador. Dicho comité se caracteriza por el entusiasmo, creatividad, compromiso, responsabilidad, el ser proactivos y sobre todo la pasión que cada uno de nosotros tiene por este proyecto que hoy es una realidad.
                </p>
                <p class="subtitle is-size-4-desktop has-text-black">
                    Con este modelo desarrollarás diversas habilidades entre las cuales destaca el poder solucionar problemáticas que observamos día a día, administración del tiempo y planeación, dominio de la situación, mejorar nuestras relaciones al interactuar con jóvenes con quienes no convivimos regularmente y conocer cada vez más acerca de lo que sucede a nuestro alrededor y como estas acciones repercuten en nosotros.
                </p>
                <p class="subtitle is-size-4-desktop has-text-black">
                    Para finalizar, me gustaría reiterar la alegría que me genera el que ustedes formen parte de esta historia que apenas comienza, y recuerden; “Sólo existen dos días en el año en que no se puede hacer nada. Uno se llama ayer y otro mañana. Por lo tanto, hoy es el día ideal para amar, crecer, hacer y principalmente vivir”. (Dalai Lama).
                </p>
            </div>
        </div>

    </div>
</section>
<!-- otras secciones -->

<div style="background-image:linear-gradient(141deg, #9fb8ad 0%, #1fc8db 51%, #2cb5e8 75%) ">
<section class="hero">
    <div class="columns is-vcentered" style="height: 500px; background-color:">
        <div class="column">
            <div class="columns is-centered">
                <div class="column is-7">
                    <img src="{{ asset('img/slider/slide1.jpg') }}" style="border-radius: 10px;">
                </div>
            </div>
        </div>
        <div class="column">
            <h1 class="title is-size-2-desktop has-text-primary">Secretariado</h1>
            <p class="subtitle">Estamos listos para recibirte en este tecmimun</p>
            <hr><br>
            <button class="button is-primary is-outlined">Conocenos</button>
        </div>
    </div>
</section>

<section class="hero">
    <div class="columns is-vcentered has-text-right" style="height: 500px; background-color: ">
        <div class="column">
            <h1 class="title is-size-2-desktop has-text-primary">Comites</h1>
            <p class="subtitle">Estamos listos para recibirte en este tecmimun</p>
            <hr><br>
            <button class="button is-primary is-outlined">Conocenos</button>
        </div>
        <div class="column">
            <div class="columns is-centered">
                <div class="column is-7">
                    <img src="{{ asset('img/slider/slide1.jpg') }}" style="border-radius: 10px;">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="hero">
    <div class="columns is-vcentered" style="height: 500px; background-color:">
        <div class="column">
            <div class="columns is-centered">
                <div class="column is-7">
                    <img src="{{ asset('img/slider/slide1.jpg') }}" style="border-radius: 30px;">
                </div>
            </div>
        </div>
        <div class="column">
            <h1 class="title is-size-2-desktop has-text-primary">Registro</h1>
            <p class="subtitle">Estamos listos para recibirte en este tecmimun</p>
            <hr><br>
            <button class="button is-rounded is-success is-outlined">Registrate</button>
        </div>
    </div>
</section>
</div>


@include('index.modal.login')

<script src="js/slider-uikit/uikit.js"></script>
<script src="js/jquery.min.js"></script>
<script>
$(document).ready(function(){
    UIkit.scrollspy();
});
window.onload = function() {
    $("#div-loader").delay(200).fadeOut("slow");
    
}
</script>
@endsection