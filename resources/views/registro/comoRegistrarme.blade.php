@extends('plantilla.second')

@section('titulo', 'Como registrarme?')

@section('body')

<section class="section is-gradient-blue">


    @include('plantilla.secondNavbar')
    <br><br><br>
    <div class="container">
        <div class="columns is-vcentered">
            <div class="column is-6 has-text-centered is-hidden-desktop" uk-scrollspy="cls: uk-animation-scale-up; delay:250; repeat: false">
                <img width="75%" src="{{ asset('img/logo-blanco.png') }}" alt="Logo Tec2019">
            </div>
            <div class="column is-5 has-text-centered" uk-scrollspy="cls: uk-animation-scale-up; delay: 250; repeat: false">
                <h1 class="title is-size-1-desktop has-text-white">Bienvenidos</h1>
                <p class="subtitle is-size-3-desktop has-text-white">Estamos contentos de contar con tu participación en este Modelo de las Naciones Unidas</p>
            </div>
            <div class="column is-1">

            </div>
            <div class="column is-6 has-text-centered is-hidden-mobile" uk-scrollspy="cls: uk-animation-scale-up; delay:250; repeat: false">
                <img width="75%" src="{{ asset('img/logo-blanco.png') }}" alt="Logo Tec2019">
            </div>
        </div>
    </div>
    <br>
</section>

<section class="hero is-bluegrey"> -</section>

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column has-text-centered" uk-scrollspy="cls: uk-animation-scale-down; delay: 500; repeat: false">
                <p class="title is-size-3-desktop">REGISTRO <i class="fas fa-chevron-right" style="margin: 0 10px;"></i> Dos formas de registrarte</p>
            </div>
        </div>

        <br>

        <div class="columns is-vcentered" uk-scrollspy="cls: uk-animation-fade; target: > .column; delay: 700; repeat: false">
            <div class="column">
                <p class="title is-size-3-desktop">Registro completo</p>
                <p class="subtitle is-size-4-desktop has-text-success">
                    Debes registrar todos tus datos, los cuales será requeridos por medio de un formulario.
                    Si eres delegado independiente esta es la opción correcta.
                </p>
            </div>

            <div class="column">
                <img class="images" src="{{ asset('img/inscripcion.png') }}" alt="Foto inscripción" style="border-radius: 30px">
            </div>
        </div>

        <div class="columns is-vcentered is-hidden-mobile" uk-scrollspy="cls: uk-animation-fade; target: > .column; delay: 700; repeat: false">
            <div class="column">
                <img class="images" src="{{ asset('img/Codigo.png') }}" alt="Registro con codigo" style="border-radius: 30px">
            </div>
            <div class="column">
                <p class="title is-size-3-desktop">Pre-registro</p>
                <p class="subtitle is-size-4-desktop has-text-success">
                    Un pre-registro indica que ya se ha iniciado un registro por parte de tu coordinador, 
                    cual te proporcionará un código para que puedas finalizar y confirmar todos tus datos.
                </p>
            </div>
        </div>

        <div class="columns is-vcentered is-hidden-desktop" uk-scrollspy="cls: uk-animation-fade; target: > .column; delay: 700; repeat: false">
            <div class="column">
                <p class="title is-size-3-desktop">Pre-registro</p>
                <p class="subtitle is-size-4-desktop has-text-success">
                    Un pre-registro indica que ya se ha iniciado un registro por parte de tu coordinador, 
                    cual te proporcionará un código para que puedas finalizar y confirmar todos tus datos.
                </p>
            </div>
            <div class="column">
                <img class="images" src="{{ asset('img/Codigo.png') }}" alt="Registro con codigo" style="border-radius: 30px">
            </div>
        </div>
        
    </div>
</section>

<section class="section is-gradient-green">
    <div class="container">
        <div class="columns">
            <div class="column has-text-centered" uk-scrollspy="cls: uk-animation-scale-down; delay: 500; repeat: false">
                <p class="title is-size-3-desktop has-text-white">FORMULARIO <i class="fas fa-chevron-right" style="margin: 0 10px;"></i> Detalles que debes tener en cuenta</p>
            </div>
        </div>
        <br>
        <div class="columns" uk-scrollspy="cls: uk-animation-fade; target: > .column; delay: 700; repeat: false">
            <div class="column is-5">
                    
                <p class="title is-size-3-desktop has-text-white">
                    <span class="icon has-text-primary" style="margin-right: 20px;">
                        <i class="fas fa-certificate"></i>
                    </span>
                    Nombre</p>
                <p class="subtitle is-size-4-desktop has-text-white">
                    Debes escribirlo de la forma correcta, es decir, sin faltas de ortografía.
                </p>
            </div>
            <div class="column is-2"></div>
            <div class="column is-5">
                <p class="title is-size-3-desktop has-text-white">
                    <span class="icon has-text-primary" style="margin-right: 20px;">
                        <i class="fas fa-certificate"></i>
                    </span>
                    E-mail</p>
                <p class="subtitle is-size-4-desktop has-text-white">
                    Debe ser un correo existente, debido a que será necesario si deseamos comunicarnos contigo.
                </p>
            </div>
        </div>
        <br>
        <div class="columns" uk-scrollspy="cls: uk-animation-fade; target: > .column; delay: 700; repeat: false">
            <div class="column is-5">
                <p class="title is-size-3-desktop has-text-white">
                    <span class="icon has-text-primary" style="margin-right: 20px;">
                        <i class="fas fa-certificate"></i>
                    </span>
                    País</p>
                <p class="subtitle is-size-4-desktop has-text-white">
                    Se rellenará sólo cuando elijas un comité, y contendrá unicamente los países disponibles.
                </p>
            </div>
            <div class="column is-2"></div>
            <div class="column is-5">
                <p class="title is-size-3-desktop has-text-white">
                    <span class="icon has-text-primary" style="margin-right: 20px;">
                        <i class="fas fa-certificate"></i>
                    </span>
                    Otras</p>
                <p class="subtitle is-size-4-desktop has-text-white">
                    Debes tomar encuenta que todos tus datos será usados para mejorar tu experiencia en este MUN, por lo que debes procurar no comerter errores
                    al registrarte, de ser así, envianos un correo electrónico.
                </p>
            </div>
        </div>
        <br>
        <div class="columns" uk-scrollspy="cls: uk-animation-fade; target: > .column; delay: 700; repeat: false">
            <div class="column">
                <p class="title is-size-3-desktop has-text-white">
                    <span class="icon has-text-primary" style="margin-right: 20px;">
                        <i class="fas fa-certificate"></i>
                    </span>
                    Código</p>
                <p class="subtitle is-size-4-desktop has-text-white">
                    Si te han propocionado un código para tu registro, verás el mismo formulario, la unica diferencia es que los campos: Escuela, País y Comité ya no será una
                    opción que puedas elegir; debido a que ya se han solicitado una asignación previa de los mismos..
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column has-text-centered" uk-scrollspy="cls: uk-animation-scale-down; delay: 500; repeat: false">
                <p class="title is-size-3-desktop has-text-primary">CONFIRMACIÓN <i class="fas fa-chevron-right" style="margin: 0 10px;"></i> Presiona el botón enviar...</p>
            </div>
        </div>
        <br>
        <div class="columns is-vcentered" uk-scrollspy="cls: uk-animation-fade; target: > .column; delay: 700; repeat: false">
            <div class="column">
                <p class="title is-size-3-desktop">Ventana de confirmación</p>
                <p class="subtitle is-size-4-desktop has-text-success">
                    Al finalizar de introducir tus datos, presionarás el botón "Enviar", lo cual se registraran todos tus datos. 
                    Enseguida se te redireccionará a una página de resumen, en la cual verás todos tus datos. El lugar el tuyo!!
                </p>
            </div>
            <div class="column">
                <img class="image" src="{{ asset('img/inscripcion.png') }}" alt="Ventana resumen">
            </div>
        </div>
    </div>
</section>

<section class="section is-ll">
    <div class="columns has-text-centered">
        <div class="column">
            <h1 class="title is-size-3-desktop">Listo para continuar?</h1>
        </div>
    </div>
    <br><br>
    <div class="columns has-text-centered is-centered">
        <div class="column is-3">
            <a href="{{ route('Registro') }}" class="button is-info is-rounded is-large">Inscribirme</a>
        </div>
        <div class="column is-3">
            <a href="{{ route('Codigo') }}" class="button is-info is-rounded is-large">Ingresar un codigo</a>
        </div>
    </div>
</section>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/slider-uikit/uikit.js') }}"></script>
<script>
$(document).ready(function(){
    UIkit.scrollspy();
});
</script>

@endsection