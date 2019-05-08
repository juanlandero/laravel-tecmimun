@extends('modulos.plantilla.main-index')

@section('titulo', 'Patrocinadores')

@section('body')

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-4">
                <img src="{{ asset('img/patrocinadores/1.jpeg') }}">
            </div>
            <div class="column is-4">
                <img src="{{ asset('img/patrocinadores/2.jpeg') }}">
            </div>
            <div class="column is-4">
                <img src="{{ asset('img/patrocinadores/3.jpeg') }}">
            </div>
        </div>
        <div class="columns">
            <div class="column is-4">
                <img src="{{ asset('img/patrocinadores/4.jpeg') }}">
            </div>
            <div class="column is-4">
                <img src="{{ asset('img/patrocinadores/5.jpeg') }}">
            </div>
            <div class="column is-4">
                <img src="{{ asset('img/patrocinadores/6.jpeg') }}">
            </div>
        </div>
    </div>
</section>
@endsection
