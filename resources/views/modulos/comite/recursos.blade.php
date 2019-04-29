@extends('modulos.plantilla.main-index')

@section('titulo', 'Recursos de apoyo')


@section('body')

    @section('contenido-navbar')
        <img src="{{ asset('/img/banner.jpg') }}" >
    @endsection

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-8">
                <h2 class="title is-size-3-desktop">Recursos de apoyo</h2>
                <p class="subtitle">
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

        <!--div class="columns">
            <div class="column is-three-quarters">

                <div class="columns"-->
                    <div class="column">
                        <article class="media">
                            <figure class="media-left">
                                <p class="image is-128x128">
                                    <img src="https://bulma.io/images/placeholders/128x128.png">
                                </p>
                            </figure>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong class="">Mapa de procedimiento</strong> 
                                        <br>
                                        Secretario de Asuntos sin importancia
                                        <br>
                                        <button class="button is-success">Descargar</button>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
    
                    <div class="column">
                        <article class="media">
                            <figure class="media-left">
                                <p class="image is-128x128">
                                    <img src="https://bulma.io/images/placeholders/128x128.png">
                                </p>
                            </figure>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong>Protocolo</strong> 
                                        <br>
                                        Secretario de Asuntos sin importancia
                                        <br>
                                        <button class="button is-success">
                                            Descargar</button>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
    
    
                    <div class="column">
                        <article class="media">
                            <figure class="media-left">
                                <p class="image is-128x128">
                                    <img src="https://bulma.io/images/placeholders/128x128.png">
                                </p>
                            </figure>
                            <div class="media-content">
                                <div class="content is-vcentered">
                                    <p>
                                        <strong>Puntos y Mociones</strong> 
                                        <br>
                                        Secretario de Asuntos sin importancia
                                        <br>
                                        <button class="button is-success">Descargar</button>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                <!--/div>

            </div>

            <div class="column">
                <figure class="image">
                    <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                </figure>
            </div>
        </div-->

        
    </div>
</section>  
@endsection