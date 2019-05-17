@extends('modulos.plantilla.main-full')

@section('titulo', 'Registro')

@section('body')

<section class="section" style="position: relative">
    <div class="container">
        <div class="columns is-mobile is-centered is-vcentered" style="height: 500px">
            <div class="column is-6-desktop is-8-tablet is-10-mobile has-text-centered">
    
                <p class="title is-size-1-desktop has-text-primary">Ingresa tu <span class="has-text-success">código</span></p><br>
                <form id="checkin" method="POST" class="columns is-centered">
                    @csrf
                    <div class="column is-8-desktop is-8-tablet is-12-mobile">
                        <input class="input is-large is-primary is-rounded" name="codigo" id="codigo" type="text" maxlength="8" required autocomplete="off">
                    </div>
                    <div class="column is-4-desktop is-3-tablet is-12-mobile">
                        <button type="submit" class="button is-primary is-rounded is-large is-outlined">Continuar</button>
                    </div>
                </form>
            </div>    
        </div>
    </div>

    <svg style="position: fixed;bottom: 0px;left: 0px;right: 0px; z-index: -10; background-color:  " viewBox="0 0 100 50">
        <path d="M0 33 C 15 55, 70 55, 100 35 T 102 51, 0 51" fill="#118b42"/>
        <path d="M0 35 C 15 55, 70 55, 100 39 T 102 51, 0 51" fill="#04305c"/>
    </svg>

</section>

@include('dashboard.comites.modal.bienvenida-true')
@include('dashboard.comites.modal.bienvenida-wait')

@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
<link rel="stylesheet" href="{{ asset('css/ui-kit.css') }}">
    
@endsection

@section('scripts')
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/split.js') }}"></script>
<script src="{{ asset('js/tw.js') }}"></script>
<script src="{{ asset('js/slider-uikit/uikit.js') }}"></script>
<script src="{{ asset('js/dashboard/dash-bienvenida.js') }}"></script>
    
@endsection