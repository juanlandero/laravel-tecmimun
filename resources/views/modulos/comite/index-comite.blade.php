@extends('modulos.plantilla.main-full')

@section('titulo', 'Comités')

@section('css')
    <link rel="stylesheet" type="text/css" href="Circle/css/common.css" />
    <link rel="stylesheet" type="text/css" href="Circle/css/style.css" />
@endsection

@section('body')
<style>
.no_selection {
    -webkit-user-select: none;
    -moz-user-select: none;
    -khtml-user-select: none;
    -ms-user-select:none;
}
</style>
<section class="hero is-primary">
    <div class="hero-body">
        <div class="hero-container">
            @include('modulos.plantilla.navbar')
            <span class="title">INFORMACIÓN DE COMITÉS</span>
        </div>
    </div>
</section>

<ul class="ch-grid">
    @foreach ($comites as $comite)
    <li>
        <div class="ch-item" style="background-image: url({{ asset('img/comites/'.$comite->color.'.png') }})">
            <div class="ch-info">
                <div class="is-hidden-mobile"><br></div><br>
                <div style="width: 80%; margin: auto">

                    <div class="is-hidden-desktop is-hidden-tablet">
                        <p style="margin-top: 77%">
                            <a href="{{ asset('archivos/'.$comite->archivo) }}" target="_blank" class="button is-white is-outlined">Background</a>
                        </p>
                    </div>
                    <div class="is-hidden-mobile">
                        <p style="margin-top: 60%">
                            <a href="{{ asset('archivos/'.$comite->archivo) }}" target="_blank" class="button is-white is-outlined">Background</a>
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </li>
    @endforeach
</ul>

@include('modulos.plantilla.footer')
@endsection
    
@section('scripts')
    <script type="text/javascript" src="Circle/js/modernizr.custom.79639.js"></script> 
@endsection