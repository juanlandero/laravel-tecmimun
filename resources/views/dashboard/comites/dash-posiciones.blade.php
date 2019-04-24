@extends('dashboard.plantilla.main-comite')

@section('titulo', 'Premiación')

@section('contenido')

<div class="column">
    <table class="table is-fullwidth" id="tabla-posiciones">
    
    </table>

</div>

@endsection
@section('scripts')
    <script src="{{ asset('js/table/bootstrap-table.js') }}"></script>
    <script src="{{ asset('js/dashboard/dash-posiciones.js') }}"></script>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('js/table/bootstrap-table.css') }}">
@endsection