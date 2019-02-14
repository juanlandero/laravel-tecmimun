@extends('plantilla.second')

@section('titulo', 'Acerca de nosotros')

@section('body')

<section class="hero content">

    <div style="position:absolute; right: 5%; top:25px" class="has-text-green">
        @include('plantilla.secondNavbar')
    </div>
    
    <div class="title-hero has-text-centered">
            
        <h1 class="title is-size-5-mobile">Slogan en la foto del secretariado</h1>
    </div>
     
    <img src="{{ asset('img/banner.jpg') }}" alt="Image de cabeza" >
    
</section>

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-8">
                <h2 class="title is-size-2-desktop has-text-centered">¿Qué es Tecmimun?</h2>
                <p class="subtitle is-size-4-desktop">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Deleniti architecto libero corrupti, corporis molestias dolores harum nobis nihil, 
                    itaque, assumenda repellendus enim fuga. Doloribus tempore fuga 
                    dolorem sequi ducimus sint!</p>
            </div>
    
    
            <div class="column is-4">
                <div class="column">
                    <article class="message is-primary">
                        <div class="message-header">
                            <p>Registro</p>
                        </div>
                        <img src="img/teamwork.jpg" alt="">
                        <!--div class="message-body">
                            
                        </div-->
                    </article>
                </div>
                <div class="column">
                    <article class="message is-primary">
                        <div class="message-header">
                            <p>Registro</p>
                        </div>
                        <img src="img/teamwork.jpg" alt="">
                        <!--div class="message-body">
                            
                        </div-->
                    </article>
                </div>
                <div class="column">
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
    </div>
</section>

<section class="hero content">
    <div class="title-hero has-text-centered">
        <h1 class="title is-size-5-mobile">Slogan en la foto del secretariado</h1>
    </div>
        
    <img src="img/banner.jpg" alt="" class="" >
</section>


<section class="section">
    <div class="container">

        <!--div class="columns">
            <div class="column is-three-quarters"-->

                <div class="columns">
                    <div class="column">
                        <article class="media">
                            <figure class="media-left">
                                <p class="image is-64x64">
                                    <img src="https://bulma.io/images/placeholders/128x128.png">
                                </p>
                            </figure>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong class="">John Smith Colorado</strong> 
                                        <br>
                                        Secretario de Asuntos sin importancia
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
    
                    <div class="column">
                        <article class="media">
                            <figure class="media-left">
                                <p class="image is-64x64">
                                    <img src="https://bulma.io/images/placeholders/128x128.png">
                                </p>
                            </figure>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong>John Smith Colorado</strong> 
                                        <br>
                                        Secretario de Asuntos sin importancia
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
    
    
                    <div class="column">
                        <article class="media">
                            <figure class="media-left">
                                <p class="image is-64x64">
                                    <img src="https://bulma.io/images/placeholders/128x128.png">
                                </p>
                            </figure>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong>John Smith Colorado</strong> 
                                        <br>
                                        Secretario de Asuntos sin importancia
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="columns">
                    <div class="column">
                        <article class="media">
                            <figure class="media-left">
                                <p class="image is-64x64">
                                    <img src="https://bulma.io/images/placeholders/128x128.png">
                                </p>
                            </figure>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong>John Smith Colorado</strong> 
                                        <br>
                                        Secretario de Asuntos sin importancia
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
    
                    <div class="column">
                        <article class="media">
                            <figure class="media-left">
                                <p class="image is-64x64">
                                    <img src="https://bulma.io/images/placeholders/128x128.png">
                                </p>
                            </figure>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong>John Smith Colorado</strong> 
                                        <br>
                                        Secretario de Asuntos sin importancia
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
    
    
                    <div class="column">
                        <article class="media">
                            <figure class="media-left">
                                <p class="image is-64x64">
                                    <img src="https://bulma.io/images/placeholders/128x128.png">
                                </p>
                            </figure>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong>John Smith Colorado</strong> 
                                        <br>
                                        Secretario de Asuntos sin importancia
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="columns">
                    <div class="column">
                        <article class="media">
                            <figure class="media-left">
                                <p class="image is-64x64">
                                    <img src="https://bulma.io/images/placeholders/128x128.png">
                                </p>
                            </figure>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong>John Smith Colorado</strong> 
                                        <br>
                                        Secretario de Asuntos sin importancia
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
    
                    <div class="column">
                        <article class="media">
                            <figure class="media-left">
                                <p class="image is-64x64">
                                    <img src="https://bulma.io/images/placeholders/128x128.png">
                                </p>
                            </figure>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong>John Smith Colorado</strong> 
                                        <br>
                                        Secretario de Asuntos sin importancia
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
    
    
                    <div class="column">
                        <article class="media">
                            <figure class="media-left">
                                <p class="image is-64x64">
                                    <img src="https://bulma.io/images/placeholders/128x128.png">
                                </p>
                            </figure>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong>John Smith Colorado</strong> 
                                        <br>
                                        Secretario de Asuntos sin importancia
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

            <!--/div>

            <div class="column">
                <figure class="image">
                    <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                </figure>
            </div>
        </div-->

        
    </div>
</section>
@endsection
