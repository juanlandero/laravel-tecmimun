@extends('modulos.plantilla.main-index')

@section('titulo', 'Posiciones oficiales')

@section('body')
    
    @section('contenido-navbar')
        <img src="{{ asset('img/portadas/posiciones_oficiales.jpg') }}" alt="" class="" >
    @endsection

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-8">
                <h1 class="title is-size-3-desktop">
                    POSICIONES OFICIALES
                </h1>
                <p class="subtitle">
                    Las posiciones oficiales son el documento oficial por delegado 
                    que dicta la postura del país al representar, este documento 
                    tiene importancia fundamental para el buen manejo y desarrollo del debate.
                </p>
            </div>
            <div class="column is-4">
                @include('modulos.plantilla.menu-derecho')
            </div>
        </div>
    </div>
</section>
@endsection