@extends('plantilla.index')

@section('titulo', 'Inicio')

@section('body')
@include('plantilla.navbar')

<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: fade; autoplay: true; autoplay-interval: 2000; pause-on-hover: false">

    <ul class="uk-slideshow-items">
        <li>
            <img src="img/slider/slide1.jpg" alt="" uk-cover>
            <div class="uk-position-center uk-position-small uk-text-center uk-light">
                <h1 class="uk-margin-remove title is-size-1-desktop is-size-5-mobile">TECMIMUN 2019</h1>
                <h3 class="uk-margin-remove">Mayo 24 y 25, 2019</h3>
            </div>
        </li>
        <li>
            <img src="img/slider/slide2.jpg" alt="" uk-cover>
            <div class="uk-position-center uk-position-small uk-text-center">
                <h2 uk-slideshow-parallax="x: 100,-100">Heading</h2>
                <p uk-slideshow-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p>
            </div>
        </li>
        <li>
            <img src="img/slider/slide3.jpg" alt="" uk-cover>
            <div class="uk-position-center uk-position-small uk-text-center">
                <h2 uk-slideshow-parallax="x: 100,-100">Heading</h2>
                <p uk-slideshow-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p>
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
        
    </div>
</div>
<br><br>
<section class="hero" uk-scrollspy="cls:uk-animation-fade; delay: 500">
    <div class="hero-body">
        
        <div class="container">
            <div class="columns has-text-centered">
                <div class="column">
                    <p class="title is-size-3-desktop has-text-primary">24 de Mayo 2019</p>
                </div>
            </div>
        </div>
        <br><br><br><br><br>
        <div class="container">
            <div uk-countdown="date: 2019-05-24T08:00:00" class="columns is-centered is-mobile">
                <div class="column is-2-desktop is-5-mobile has-text-centered">
                    <p class="heading">Días</p>
                    <span class="title is-size-1-desktop has-text-primary uk-countdown-number uk-countdown-days"></span>
                </div>
                <div class="column is-2-desktop is-4-mobile has-text-centered">
                    <p class="heading">Horas</p>
                    <span class="title is-size-1-desktop has-text-primary uk-countdown-number uk-countdown-hours"></span>
                </div>
                <div class="column is-1-desktop is-4-mobile has-text-centered is-hidden-mobile">
                        <p class="heading"></p>
                        <span class="title is-size-1-desktop has-text-primary uk-countdown-separator">:</span>
                    </div>
                <div class="column is-2-desktop is-4-mobile has-text-centered">
                    <p class="heading">Minutos</p>
                    <span class="title is-size-1-desktop has-text-primary uk-countdown-number uk-countdown-minutes"></span>
                </div>
                <div class="column is-1-desktop is-4-mobile has-text-centered is-hidden-mobile">
                    <p class="heading"></p>
                    <span class="title is-size-1-desktop has-text-primary uk-countdown-separator">:</span>
                </div>
                <div class="column is-2-desktop is-3-mobile has-text-centered is-hidden-mobile">
                    <p class="heading">Segundos</p>
                    <span class="title is-size-1-desktop has-text-primary uk-countdown-number uk-countdown-seconds"></span>
                </div>
            </div>
        </div>
    </div>
    
</section>
<br><br><br><br>
<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-4" uk-scrollspy="cls: uk-animation-slide-left; repeat: false; delay: 700">
                <div class="box">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut pariatur impedit 
                    alias facere quas illum esse. Ab nisi doloremque quasi commodi ea reiciendis veritatis 
                    consectetur atque alias eum? Quia, eaque.</p>
                </div>
            </div>
            <div class="column is-8" uk-scrollspy="cls: uk-animation-slide-right; repeat: false; delay: 700">
                
                <h1 class="title is-size-2-desktop">Carta de Bienvenida</h1>
                <br>
                <p class="subtitle is-size-4-desktop">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi ipsam sequi 
                    inventore dolor beatae culpa, magni vel eaque perspiciatis! Ut reprehenderit
                    repellat ipsa deleniti voluptatum velit doloremque molestiae ipsam explicabo.</p>
            </div>
        </div>

    </div>
</section>


<section class="section">
    <div class="container">
        <div class="columns" uk-grid uk-scrollspy="cls: uk-animation-fade; target: > .column; delay: 700; repeat: false">
            <div class="column is-4">
                <article class="message is-primary">
                    <div class="message-header">
                        <p>Secretariado</p>
                    </div>
                    <img src="img/teamwork.jpg" alt="">
                    <!--div class="message-body">
                        
                    </div-->
                </article>
            </div>
            <div class="column is-4" >
                <article class="message is-primary">
                    <div class="message-header">
                        <p>Comites</p>
                    </div>
                    <img src="img/teamwork.jpg" alt="">
                    <!--div class="message-body">
                        
                    </div-->
                </article>
            </div>
            <div class="column is-4" >
                <article class="message is-primary">
                    <div class="message-header">
                        <p>Registro</p>
                    </div>
                    <img src="img/teamwork.jpg" alt="">
                    <!--div class="message-body">
                        
                    </div-->
                </article>
            </div>
        </div>
    </div>
</section>


<script src="js/slider-uikit/uikit.js"></script>
<script src="js/jquery.min.js"></script>
<script>
$(document).ready(function(){
    UIkit.scrollspy();
});
</script>


@endsection