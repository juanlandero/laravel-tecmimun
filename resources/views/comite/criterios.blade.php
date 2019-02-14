@extends('plantilla.second')

@section('titulo', 'Acerca de nosotros')

@section('body')

<section class="hero content">
    <div style="position:absolute; right: 5%; top:25px" class="has-text-green">
        @include('plantilla.secondNavbar')
    </div>   
    <img src="../img/banner.jpg" alt="" class="" >
</section>

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-8">
                <h2 class="title is-size-2-desktop has-text-centered">Criterios de premiación</h2>
                <p class="subtitle is-size-4-desktop">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Deleniti architecto libero corrupti, corporis molestias dolores harum nobis nihil, 
                    itaque, assumenda repellendus enim fuga. Doloribus tempore fuga 
                    dolorem sequi ducimus sint!</p>
            </div>
    
    
            <div class="column is-4">
                @include('plantilla.panelright')
            </div>     
        </div>
    </div>
</section>

<section class="hero content">
    <div class="title-hero has-text-centered">
        <h1 class="title is-size-5-mobile">Imagen criterio de premiacion</h1>
    </div>
        
    <img src="../img/banner.jpg" alt="" class="" >
</section>

@endsection
