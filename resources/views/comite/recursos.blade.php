@extends('plantilla.second')

@section('titulo', 'Recursos de apoyo')


@section('body')
<section class="hero content">
    <img src="img/banner.jpg" alt="" >
</section>

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-8">
                <h2 class="title is-size-1 has-text-centered">Recursos de apoyo</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
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