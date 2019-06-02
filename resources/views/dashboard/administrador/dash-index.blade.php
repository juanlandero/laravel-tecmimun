@extends('dashboard.plantilla.main-admin')

@section('titulo', 'Búsqueda')

@section('contenido')

<section class="section">
    <div class="columns is-centered">
        <div class="column is-9">
            <form id="buscar" method="post">
                @csrf
                <div  class="field has-addons is-large ">
                    <div class="control is-expanded">
                        <input class="input is-large is-success is-rounded" name="busqueda" type="text" autocomplete="off" style="text-transform: lowercase;" >
                    </div>
                    <div class="control">
                        <button id="div_buscar" type="submit" class="button is-success is-large is-rounded is-outlined">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<section>
    <table id="alumnos"></table>
</section>
<section class="section" id="instrucciones">
    <div class="has-text-centered is-centered">
        <p>Búsquedas:</p>
        <p class="">a. Por nombres de alumnos</p>
        <p class="">c. Por nombres de comités</p>
        <p class="">e. Por nombre de escuelas o tutores</p>
        <p class="">p. Por nombres de países</p>
    </div>
</section>

@endsection


@section('css')
    <link rel="stylesheet" href="{{ asset('css/ui-kit.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/slider-uikit/uikit.js') }}"></script>
    <script src="{{ asset('js/dashboard/dash-busqueda.js') }}"></script>
@endsection