@extends('plantilla.second')

@section('titulo', 'Fechas y Costos')

@section('body')
<section class="section">
    <div class="container">

        <div class="columns">
            <div class="column">
                <h1 class="title">Información de registro</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum maxime perspiciatis ipsa ex non. Pariatur aliquam fugiat laborum rerum, veniam officia id fugit tempora soluta sequi minus recusandae natus perspiciatis?</p>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <h1 class="title">Formato de inscripción</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad ipsam sequi labore, provident iste molestiae sunt saepe eaque, excepturi ullam a consectetur in hic minus autem inventore quos magnam doloribus?</p>
            </div>
        </div>

    </div>

    <a class="button is-large is-success" href="{{ Route('Registro') }}">Registro</a>

</section>

@endsection