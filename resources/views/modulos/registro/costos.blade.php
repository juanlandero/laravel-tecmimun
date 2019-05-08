@extends('modulos.plantilla.main-index')

@section('titulo', 'Fechas y Costos')

@section('body')

@section('contenido-navbar')
    <section class="hero is-primary">
        <div class="hero-body">
            <div class="hero-container">
                <span class="title">FORMATO DE INSCRIPCIÓN</span>
            </div>
        </div>
    </section>
@endsection

    <div class="section" style="margin-bottom: 2%">
        <div class="columns">

            <div class="column">
                <div class="columns is-centered">
                    <div class="column is-10 box has-text-centered">
                        <br><br>
                        <p class="has-text-success"><i class="fas fa-calendar-day fa-3x"></i></p>
                        <strong class="has-text-success">Fechas</strong>
                        <br><br><br><br>
                        <p class="subtitle has-text-primary">
                            El modelo de las Naciones Unidas de la Universidad Tecmilenio Campus 
                            Villahermosa, TECMIMUN2019, será llevado a cabo los días <span class="tag is-primary">viernes 24</span> y 
                            <span class="tag is-primary">sábado 25</span> de mayo del presente año.
                        </p>
                        <br><br>
                    </div>
                </div>
            </div>

            <div class="is-hidden-desktop">
                <div class="column">
                    
                </div>
            </div>

            <div class="column">
                <div class="columns is-centered">
                    <div class="column is-10 box has-text-centered">
                        <br><br>
                        <p class="has-text-success"><i class="fas fa-money-check-alt fa-3x"></i></p>
                        <strong class="has-text-success">Costos</strong>
                        <br><br><br><br>
                        <p class="subtitle has-text-primary">
                            TECMIMUN2019 contará con un costo de remuneración de <span class="tag is-primary">$350.00</span> (trescientos 
                            cincuenta pesos 00/100 M.N.) por delegado, que incluirá el paquete de delegado 
                            y los alimentos en el horario indicado.
                        </p>
                        <br>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection