@extends('modulos.plantilla.main-full')

@section('titulo', 'Registro')

@section('body')

<section class="section" style="height: 100%">
        <div class="container" style="height: 100%" >

            <div class="columns is-mobile is-multiline is-centered is-vcentered" style="height: 100%">
    
                <div class="column is-12-mobile has-text-centered is-marginless">
                    <div class="columns is-centered is-mobile">
                        <div class="column is-6">
                            <img src="{{ asset('img/logo/logo.png') }}">
                        </div>
                    </div>
                    <p class="title is-size-1-desktop has-text-success">Bienvenido</p>
                </div>
                
                <div class="column is-12-mobile has-text-centered">
                    <p class="subtitle has-text-primary">Ingresa tu código para registrarte</p>
                    <form method="post" id="codigo" class="columns is-centered">
                        @csrf

                        <div class="columns">
                            <div class="column is-12-mobile is-10-tablet is-10-desktop">
                                <input class="input is-medium is-primary is-rounded campos" name="codigo" id="codigo" type="text" autocomplete="off" maxlength="10">
                            </div>
                            <div class="column is-2-desktop">
                                <button class="button is-primary is-rounded is-medium is-outlined" type="submit">
                                    <i class="fas fa-check"></i>
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>  
        </div>
    </section>
    
      
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/ui-kit.css') }}">
    <style>
    .campos{
        text-align: center;
    }
    </style>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/slider-uikit/uikit.js') }}"></script> 
    <script src="{{ asset('js/modulos/registro-confirmacion.js') }}"></script>
@endsection