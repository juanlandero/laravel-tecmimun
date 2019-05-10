@extends('modulos.plantilla.main-index')

@section('titulo', 'Criterios de premiación')

@section('body')

    @section('contenido-navbar')
        <img src="{{ asset('img/portadas/premiacion.jpg') }}" >
    @endsection

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-8">
                    <h2 class="title is-size-3-desktop">CRITERIOS DE PREMIACIÓN</h2>
                    <p class="subtitle has-text-justified">
                        Para el mejor funcionamiento y manejo del modelo, las mesas de cada 
                        comité de TECMIMUN 2019 evaluarán la participación y desempeño de cada 
                        delegación basados en los siguientes criterios:
                    </p>
                </div>
        
        
                <div class="column is-4">
                    @include('modulos.plantilla.menu-derecho')
                </div>     
            </div>
        </div>
    </section>

    <section class="section">
            <div class="container">
        
                <div class="columns is-centered">
                    <div class="column is-4" >
                        <article class="media">
                            <figure class="media-left">
                                <p class="image is-128x128">
                                    <img src="{{ asset('archivos/premiacion.png') }}">
                                </p>
                            </figure>
                            <div class="media-content">
                                <p>
                                    <strong>Criterios de premiación</strong> 
                                    <br>
                                    <br>
                                    <a href="{{ url('archivos/Criterios_de_premiacion.pdf') }}" target="_blank" class="button is-success is-rounded is-outlined">Ver</a>
                                    <a href="{{ url('archivos/Criterios_de_premiacion.pdf') }}" download="" class="button is-success is-rounded is-outlined">Descargar</a>
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section> 
@endsection
