@extends('plantilla.index')

@section('titulo', 'Inicio')

@section('body')


<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: fade; autoplay: true; autoplay-interval: 6000; pause-on-hover: false">

    <ul class="uk-slideshow-items">
        <li>
            <img src="img/slider/slide1.jpg" alt="" uk-cover>
            <div class="uk-position-center uk-position-small uk-text-center uk-light">
                <h1 class="uk-margin-remove title is-1 ">TECMIMUN 2019</h1>
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

    <div class="uk-position-top">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="">
                        <img src="img/logo.png" height="100%" >
                    </a>
              
                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
              
                <div id="navbarBasicExample" class="navbar-menu">
                    <div class="navbar-start">
                       
                    </div>
              
                    <div class="navbar-end">
                        <a class="navbar-item">Inicio</a>
                        <a class="navbar-item">Acerca de</a>
                        <a class="navbar-item">Secretariado</a>
                        <a class="navbar-item">Modelo</a>
                        <a class="navbar-item">Protocolo</a>
                        <a class="navbar-item">Contacto</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>

<section class="section">
    <p>reloj</p>
</section>


<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-4">
                <div class="box">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut pariatur impedit 
                    alias facere quas illum esse. Ab nisi doloremque quasi commodi ea reiciendis veritatis 
                    consectetur atque alias eum? Quia, eaque.</p>
                </div>
            </div>
            <div class="column is-8">
                <article class="message is-success">
                    
                    <div class="message-body">
                        <h1 class="title">Carta de bienvenida</h1>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
                    </div>
                </article>
            </div>
        </div>

    </div>
</section>


<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-4">
                <article class="message is-success">
                    <div class="message-header">
                        <p>Secretariado</p>
                    </div>
                    <img src="img/teamwork.jpg" alt="">
                    <!--div class="message-body">
                        
                    </div-->
                </article>
            </div>
            <div class="column is-4">
                <article class="message is-success">
                    <div class="message-header">
                        <p>Comites</p>
                    </div>
                    <img src="img/teamwork.jpg" alt="">
                    <!--div class="message-body">
                        
                    </div-->
                </article>
            </div>
            <div class="column is-4">
                <article class="message is-success">
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


@endsection