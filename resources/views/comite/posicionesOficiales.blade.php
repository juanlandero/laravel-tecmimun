@extends('plantilla.second')
@section('titulo', 'Posiciones oficiales')

@section('body')
    
<section class="hero">
    <img src="../img/banner.jpg" alt="">
</section>

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-8">
                <h1 class="title is-size-3-desktop">
                    Posiciones Oficiales
                </h1>
                <p class="subtitle">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque quod esse minus quaerat natus nihil illum cupiditate beatae a soluta explicabo recusandae officiis, voluptas, animi sed quia laudantium corrupti molestias!</p>
            </div>
            <div class="column is-4">
                @include('plantilla.panelright')
            </div>
        </div>
    </div>
</section>
@endsection