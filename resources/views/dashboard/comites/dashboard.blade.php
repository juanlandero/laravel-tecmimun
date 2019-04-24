@extends('dashboard.plantilla.main-comite')

@section('titulo', 'Comite')

@section('contenido')

<br>
<div class="container">
    <div class="columns is-centered">
        <div class="column is-6"><img src="{{ asset('img/logo/logo.png') }}"></div>
    </div>
    <div class="columns is-centered">
        <h1 class="title is-size-1-desktop has-text-centered is-primary">Bienvenidos</h1>
    </div>
    <div class="columns is-centered">
        <h1 class="title is-size-1-desktop has-text-centered has-text-success">{{ $nombre }}</h1>
    </div>
</div>

@endsection
