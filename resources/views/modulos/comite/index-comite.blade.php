@extends('modulos.plantilla.main-index')

@section('titulo', 'Comités')

@section('css')
    <link rel="stylesheet" type="text/css" href="Circle/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="Circle/css/common.css" />
    <link rel="stylesheet" type="text/css" href="Circle/css/style.css" />
@endsection

@section('body')
    
    <ul class="ch-grid">
        @foreach ($comites as $comite)
            <li>
                <div class="ch-item ch-img-3">
                    <div class="ch-info">
                        <h1 class="title is-size-3-desktop">{{ $comite->nombre }}</h1>
                        <p class="subtitle is-size-4-desktop">{{ $comite->pk_idioma }}</p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>

@endsection
    
@section('scripts')
    <script type="text/javascript" src="Circle/js/modernizr.custom.79639.js"></script> 
@endsection