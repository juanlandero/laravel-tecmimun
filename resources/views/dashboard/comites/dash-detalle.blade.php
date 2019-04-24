@extends('dashboard.plantilla.main-comite')

@section('titulo', 'Detalle')

@section('contenido')

<div class="column">
    <div class="box">
        <nav class="level">
            @if (session()->has('key_comite'))
            <p class="level-item has-text-centered">
                ID:
                <a class="is-info"> {{ $comite->id }}</a>
            </p>
            <p class="level-item has-text-centered">
                COMITÉ:
                <a class="link is-info"> {{ $comite->nombre }}</a>
            </p>
            <p class="level-item has-text-centered">
                IDIOMA:
                <a class="link is-info"> {{ $comite->idioma }}</a>
            </p>
            <p class="level-item has-text-centered">
                USUARIO:
                <a class="link is-info"> {{ $comite->codigo }}</a>
            </p>
            @endif
        </nav>
    </div>

    <div class="box">
        <table class="table is-fullwidth" id="tabla-detalle">
        
        </table>
    </div>
</div>

@endsection
@section('scripts')
    <script src="{{ asset('js/table/bootstrap-table.js') }}"></script>
    <script src="{{ asset('js/dashboard/dash-detalle.js') }}"></script>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('js/table/bootstrap-table.css') }}">
@endsection