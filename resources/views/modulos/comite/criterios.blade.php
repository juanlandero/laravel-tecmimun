@extends('modulos.plantilla.main-index')

@section('titulo', 'Criterios de premiación')

@section('body')

    @section('contenido-navbar')
        <img src="{{ asset('/img/banner.jpg') }}" >
    @endsection

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-8">
                    <h2 class="title is-size-3-desktop">Criterios de premiación</h2>
                    <p class="subtitle">
                        Para el mejor funcionamiento y manejo del modelo las mesas de cada 
                        comité de TECMIMUN 2019 evaluaran la participación y desempeño de cada 
                        delegación basados en los siguientes criterios:
                    </p>
                </div>
        
        
                <div class="column is-4">
                    @include('modulos.plantilla.menu-derecho')
                </div>     
            </div>
        </div>
    </section>

    <section class="hero content">
        <div class="title-hero has-text-centered">
            <h1 class="title is-size-5-mobile">Imagen criterio de premiacion</h1>
        </div>
        <img src="{{ asset('/img/banner.jpg') }}" >
    </section>
@endsection
