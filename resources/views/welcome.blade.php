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
    background-color: #f0f0f0;
    color: #0FC939;
}

#logo{
    position: fixed;
    top: 49%;
    left: 45%;
    width: 10%; !important
}
</style>

<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: fade; autoplay: true; autoplay-interval: 6000; pause-on-hover: false">

    <ul class="uk-slideshow-items">
        <li>
            <img src="img/slider/slide1.jpg" alt="" uk-cover style="opacity: 0.9">
            <div class="uk-position-center uk-position-small uk-text-center uk-light">
                <h1 class="uk-margin-remove title is-size-1-desktop is-size-5-mobile">TECMIMUN 2019</h1>
                <h3 class="uk-margin-remove">Mayo 24 y 25, 2019</h3>
            </div>
        </li>
        <li>
            <img src="img/slider/slide2.jpg" alt="" uk-cover style="opacity: 0.9">
            <div class="uk-position-center uk-position-small uk-text-center">
                <!--h2 uk-slideshow-parallax="x: 100,-100">Heading</h2>
                <p uk-slideshow-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p-->
            </div>
        </li>
        <li>
            <img src="img/slider/slide3.jpg" alt="" uk-cover style="opacity: 0.9">
            <div class="uk-position-center uk-position-small uk-text-center">
                <!--h2 uk-slideshow-parallax="x: 100,-100">Heading</h2>
                <p uk-slideshow-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p-->
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
<!--br><br-->

<section class="hero is-gradient-grween" uk-scrollspy="cls:uk-animation-fade; delay: 500">
    <div class="hero-body">
        
        <div class="container">
            <div class="columns has-text-centered">
                <div class="column">
                    <p class="title is-size-3-desktop has-text-success">24 de Mayo 2019</p>
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
                <!--div class="column is-1-desktop is-4-mobile has-text-centered is-hidden-mobile">
                    <p class="heading"></p>
                    <span class="title is-size-1-desktop has-text-primary uk-countdown-separator">:</span>
                </div-->
                <div class="column is-2-desktop is-4-mobile has-text-centered">
                    <span class="box box-clock title is-size-1-desktop uk-countdown-number uk-countdown-minutes"></span>
                    <p class="heading has-text-success">Minutos</p>
                </div>
                <!--div class="column is-1-desktop is-4-mobile has-text-centered is-hidden-mobile">
                    <p class="heading"></p>
                    <span class="title is-size-1-desktop has-text-primary uk-countdown-separator">:</span>
                </div-->
                <div class="column is-2-desktop is-3-mobile has-text-centered is-hidden-mobile">
                    <span class="box box-clock title is-size-1-desktop has-text-success uk-countdown-number uk-countdown-seconds"></span>
                    <p class="heading has-text-success">Segundos</p>
                </div>
            </div>
        </div>
    </div>

</section>

<div class="div-loader" id="div-loader">
    <div class="columns is-centered is-vcentered has-text-centered is-mobile" style="margin-top: 15%;">
        <div class="column is-3-desktop is-8-mobile is-centered">
            <!--span class="uk-margin-small-right" uk-spinner="ratio: 8"></span-->
            <img id="lo" src="{{ asset('img/logo-blanco.png') }}" alt="">
        </div>
        <!--div class="column is-3-desktop">
                <img id="lo" src="{{ asset('svg-loaders/ball-triangle.svg') }}" alt="">
        </div-->
    </div>
    <div class="columns is-centered is-mobile">
        <h1 class="title">Cargando...</h1>
    </div>
</div>

<br><br>
 
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
                    Es todo un honor para mí dirigirme a ustedes como la primera Secretaria General del Modelo de las Naciones Unidas de la Universidad Tecmilenio. Mi nombre es Mónica Danaé Juárez López y me siento entusiasmada de ser parte del Comité Organizador de la Primera Edición de TECMIMUN, el cuál se llevará acabo los días 17 y 18 de mayo, 2019.
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


<!--section class="section">
    <div class="container">
        <div class="columns" uk-grid uk-scrollspy="cls: uk-animation-fade; target: > .column; delay: 700; repeat: false">
            <div class="column is-4">
                <article class="message is-primary">
                    <div class="message-header">
                        <p>Secretariado</p>
                    </div>
                    <img src="img/teamwork.jpg" alt="">
                   
                </article>
            </div>
            <div class="column is-4" >
                <article class="message is-primary">
                    <div class="message-header">
                        <p>Comites</p>
                    </div>
                    <img src="img/teamwork.jpg" alt="">
                    
                </article>
            </div>
            <div class="column is-4" >
                <article class="message is-primary">
                    <div class="message-header">
                        <p>Registro</p>
                    </div>
                    <img src="img/teamwork.jpg" alt="">
                    
                </article>
            </div>
        </div>
    </div>
</section-->
<section class="hero is-light is-bold">
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title has-text-primary">Secretariado</h1>
      </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="columns is-centered is-multiline">
        
            <div class="columns is-vcentered">
                <div class="column is-4">
                    <img src="{{ asset('img/logo.png') }}" alt="" style="border-radius: 50%">
                </div>
                <div class="column is-8 subtitle is-size-3-desktop">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae
                        iure atque iste assumenda optio, ratione eius quo? Cum, ipsa soluta accusamus debitis 
                        eveniet sit culpa autem sed ducimus adipisci quae?</div>
            </div>
        </div>
    </div>
</section>

<section class="hero is-light is-bold">
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title has-text-primary">Comités</h1>
      </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="columns is-centered is-multiline">
            <div class="columns is-vcentered">
                <div class="column is-4">
                    <img src="{{ asset('img/slider/slide1.jpg') }}" alt="" style="border-radius: 50%">
                </div>
                <div class="column is-8 subtitle is-size-3-desktop">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae
                        iure atque iste assumenda optio, ratione eius quo? Cum, ipsa soluta accusamus debitis 
                        eveniet sit culpa autem sed ducimus adipisci quae?</div>
            </div>
        </div>
    </div>
</section>

<section class="hero is-light is-bold">
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title has-text-primary">Registro</h1>
      </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="columns is-centered is-multiline">
            <div class="columns is-vcentered">
                <div class="column is-4">
                    <img src="{{ asset('img/logo.png') }}" alt="" style="border-radius: 50%">
                </div>
                <div class="column is-8 subtitle is-size-3-desktop">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae
                        iure atque iste assumenda optio, ratione eius quo? Cum, ipsa soluta accusamus debitis 
                        eveniet sit culpa autem sed ducimus adipisci quae?</div>
            </div>
        </div>
    </div>
</section>
<script src="js/slider-uikit/uikit.js"></script>
<script src="js/jquery.min.js"></script>
<script>

$(document).ready(function(){

    if (document.readyState == "complete") {
        $("#div-loader").delay(200).fadeOut("slow");
    }

    UIkit.scrollspy();

});
</script>
@endsection