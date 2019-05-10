@extends('modulos.plantilla.main-full')

@section('titulo', 'Antecedentes')

@section('body')
<div class="columns is-vcentered has-text-centered is-mobile" style="height: calc(100% - 54.5px);">
    <div class="column">
        <h1 class="title is-size-3-desktop">TECMIMUN 2019</h1>
        <p class="subtitle">Introduce tu clave y presiona enter</p>

            <div class="columns is-centered">
                <div class="column is-3">
                    <form id="clave" method="get">
                        <div class="field">
                            <div class="control">
                                <input class="input is-success is-rounded is-large" name="clave" type="text" autocomplete="off" placeholder="Clave de ingreso" style="text-align: center; color:green">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>

@include('modulos.plantilla.footer')
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/modulos/comite.js') }}"></script> 
@endsection