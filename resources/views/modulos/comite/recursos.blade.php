@extends('modulos.plantilla.main-index')

@section('titulo', 'Recursos de apoyo')


@section('body')

    @section('contenido-navbar')
        <img src="{{ asset('img/portadas/recursos_de_apoyo.jpg') }}" >
    @endsection

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-8">
                <h2 class="title is-size-3-desktop">RECURSOS DE APOYO</h2>
                <p class="subtitle has-text-justified">
                    Recursos útiles para la preparación y el correcto desarrollo del delegado 
                    para el buen funcionamiento del debate.
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

        <div class="columns">
            <div class="column">
                <article class="media">
                    <figure class="media-left">
                        <p class="image is-128x128">
                            <img src="{{ asset('archivos/Flowchart.jpeg') }}">
                        </p>
                    </figure>
                    <div class="media-content">
                        <p>
                            <strong>Mapa de procedimiento</strong> 
                            <br>
                            <br>
                            <a href="{{ url('archivos/Flowchart.jpeg') }}" target="_blank" class="button is-success is-rounded is-outlined">Ver</a>
                            <a href="{{ url('archivos/Flowchart.jpeg') }}" download="" class="button is-success is-rounded is-outlined">Descargar</a>
                        </p>
                    </div>
                </article>
            </div>

            <div class="column">
                <article class="media">
                    <figure class="media-left">
                        <p class="image is-128x128">
                            <img src="{{ asset('archivos/protocolo.png') }}">
                        </p>
                    </figure>
                    <div class="media-content">
                        <p>
                            <strong>Protocolo</strong> 
                            <br>
                            <br>
                            <a href="{{ url('archivos/Protocolo.pdf') }}" target="_blank" class="button is-success is-rounded is-outlined">Ver</a>
                            <a href="{{ url('archivos/Protocolo.pdf') }}" download="" class="button is-success is-rounded is-outlined">Descargar</a>
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>  
@endsection