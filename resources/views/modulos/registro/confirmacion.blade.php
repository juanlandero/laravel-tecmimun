@extends('modulos.plantilla.main-full')

@section('titulo', 'Registrado')

@section('body')

<section class="section" style="height: 100%">

    <div class="columns is-vcentered" style="height: 100%">

        <div class="column">
            <div class="columns has-text-centered">
                <div class="column">
                    <p class="title is-size-1-desktop">Registro <span class="has-text-success">exitoso</span></p>
                </div>
            </div>

            <br>

            <div class="columns is-mobile is-centered">
                <div class="column is-11">
                    <div class="container">
                        <div class="columns is-centered">
                            <div class="column is-2"><span class="has-text-primary is-size-4-desktop">NOMBRE</span></div>
                            <div class="column is-5 has-text-centered-mobile"><span class="has-text-success is-size-5-desktop">{{ $alumno->nombre }}</span></div>
                        </div>

                        <div class="columns is-centered">
                            <div class="column is-2"><span class="has-text-primary is-size-4-desktop">E-MAIL</span></div>
                            <div class="column is-5 has-text-centered-mobile"><span class="has-text-success is-size-5-desktop">{{ $alumno->email }}</span></div>
                        </div>

                        <div class="columns is-centered">
                            <div class="column is-2"><span class="has-text-primary is-size-4-desktop">COMITÉ</span></div>
                            <div class="column is-5 has-text-centered-mobile"><span class="has-text-success is-size-5-desktop">{{ $alumno->comite }}</span></div>
                        </div>

                        <div class="columns is-centered">
                            <div class="column is-2"><span class="has-text-primary is-size-4-desktop">DELEGACIÓN</span></div>
                            <div class="column is-5 has-text-centered-mobile"><span class="has-text-success is-size-5-desktop">{{ $alumno->pais }}</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="columns is-mobile is-centered">
                <div class="column is-8-desktop is-11-mobile is-10-tablet">
                    <p class="has-text-justify">En unos minutos enviaremos un e-mail a la dirección de 
                        correo que has registrado. Busca el e-mail en la carpeta de spam o correos no deseado.</p><br>
                    <p class="has-text-justify">Es muy importante que conserves la información contenida en el e-mail que recibirás, ya que te será útil el día del evento.</p>
                </div>
            </div>

            <div class="columns">
                <div class="column has-text-centered">
                    <a href="{{ route('modulo.email', ['email' => $alumno->email, 'codigo' => $alumno->codigo]) }}" class="button is-rounded is-primary">Salir</a>
                </div>
            </div>
        </div>

    </div>      

</section>
    
      
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/ui-kit.css') }}">
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/slider-uikit/uikit.js') }}"></script> 
@endsection