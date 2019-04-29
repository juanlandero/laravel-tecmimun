@extends('modulos.plantilla.main-index')

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
                <p class="subtitle">
                    El modelo de las Naciones Unidas de la Universidad Tecmilenio Campus 
                    Villahermosa, TECMIMUN2019, será llevado a cabo los días viernes 24 y 
                    sábado 25 del presente año.
                </p>
                <p class="subtitle">
                
                    Costos
                    
                    TECMIMUN2019 contará con un costo de remuneración de $350.oo (trescientos 
                    cincuenta pesos 00/100 M.N.) por delegado, que incluirá el paquete de delegado 
                    y los alimentos en el horario indicado.
                </p>
            </div>
        </div>

    </div>

    <a class="button is-large is-success" href="{{ Route('modulo.registro') }}">Registro</a>

</section>

@endsection