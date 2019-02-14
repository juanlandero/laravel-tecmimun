@extends('plantilla.second')

@section('titulo', 'Comites')

@section('body')
    
<link rel="stylesheet" type="text/css" href="Circle/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="Circle/css/common.css" />
    <link rel="stylesheet" type="text/css" href="Circle/css/style.css" />

<ul class="ch-grid">
    @foreach ($comites as $comite)
        <li>
            <div class="ch-item ch-img-3">
                <div class="ch-info">
                    <h1 class="title is-size-3-desktop">{{ $comite->nombre }}</h1>
                    <p class="subtitle is-size-4-desktop">{{ $comite->idioma }}</p>
                </div>
            </div>
        </li>
    @endforeach
</ul>

<script type="text/javascript" src="Circle/js/modernizr.custom.79639.js"></script> 
@endsection