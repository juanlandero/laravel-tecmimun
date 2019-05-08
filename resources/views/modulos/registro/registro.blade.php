@extends('modulos.plantilla.main-full')

@section('titulo', '¿Cómo registrarme?')

@section('body')

    <div style="position:absolute; right: 5%; top:25px; z-index: 10; color: white" class="has-text-green">
        @include('modulos.plantilla.navbar')
    </div>

    <div uk-slider="center: true; finite:true" style="height: 100%;" class="is-gradient-blue">
        <div class="uk-slider-container" style="height: 100%">

                
            <ul class="uk-slider-items" style="height: 100%">
                
                <li style="width: 100%">
                    <div class="columns is-vcentered is-centered" style="height: 100%; overflow-y: scroll; overflow-x: hidden">
                        <div class="is-hidden-desktop"><br><br><br><br></div>

                        <div class="columns is-hidden-tablet is-hidden-desktop is-centered is-mobile">
                            <div class="column is-10-mobile is-1-tablet has-text-white uk-animation-fade">
                                <img src="{{ asset('img/logo/logo-blanco.png') }}">
                            </div>
                        </div>

                        <div class="is-hidden-desktop"><br></div>

                        <div class="column is-5 has-text-centered">
                            <h1 class="title is-size-1-desktop has-text-white uk-animation-fade">Bienvenido</h1>
                            <p class="subtitle is-size-3-desktop has-text-white uk-animation-fade">Estamos contentos de contar con tu participación en este Modelo de las Naciones Unidas</p>
                        </div>
                        
                        <div class="column is-5-tablet is-5-desktop has-text-centered is-hidden-mobile">
                            <div class="columns is-centered">
                                <div class="column is-10-desktop has-text-white uk-animation-fade">
                                    <img src="{{ asset('img/logo/logo-blanco.png') }}">
                                </div>
                            </div>
                        </div>

                    </div>
                </li>

                <li style="width: 100%">
                    <div class="columns is-vcentered is-centered" style="height: 100%;">
                        <div class="is-hidden-desktop"><br><br><br><br><br><br><br><br><br><br></div>
                        <div class="column has-text-centered" >
                            <p class="title is-size-1-desktop has-text-success">REGISTRO</p>
                            <p class="sub-title is-size-3-desktop has-text-white">Puedes realizar tu registro de dos formas.</p>
                        </div>
                    </div>  
                </li>

                <li style="width: 100%">
                    <div class="columns is-vcentered is-centered" style="height: 100%; overflow-y: scroll; overflow-x: hidden">
                        <div class="is-hidden-desktop"><br><br></div>

                        <div class="column">
                            <div class="columns is-centered">
                                <div class="column is-5 has-text-centered">
                                    <p class="title is-size-3-desktop has-text-success">Registro completo</p>
                                </div>
                            </div>
                            <br>

                            <div class="columns is-hidden-tablet is-hidden-desktop is-centered is-mobile">
                                <div class="column is-10-mobile is-1-tablet">
                                    <img src="{{ asset('img/inscripcion.png') }}" style="border-radius: 30px">
                                </div>
                            </div>

                            <div class="columns is-vcentered is-centered">
                                <div class="column is-5">
                                    <p class="subtitle is-5 is-size-4-desktop has-text-white">
                                        Debes registrar todos tus datos, los cuales será requeridos por medio de un formulario.
                                        Si eres delegado independiente esta es la opción correcta.
                                    </p>
                                </div>
                    
                                <div class="column is-5-tablet is-5-desktop has-text-centered is-hidden-mobile">
                                    <div class="columns is-centered">
                                        <div class="column is-10-desktop">
                                            <img src="{{ asset('img/inscripcion.png') }}" style="border-radius: 30px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </li>

                <li style="width: 100%">
                    <div class="columns is-vcentered is-centered" style="height: 100%; overflow-y: scroll; overflow-x: hidden">
                        <div class="is-hidden-desktop"><br><br></div>

                        <div class="column">
                            <div class="columns is-centered">
                                <div class="column is-5 has-text-centered">
                                    <p class="title is-size-3-desktop has-text-success">Pre-registro</p>
                                </div>
                            </div>
                            <br>

                            <div class="columns is-hidden-tablet is-hidden-desktop is-centered is-mobile">
                                <div class="column is-10-mobile is-1-tablet">
                                    <img src="{{ asset('img/Codigo.png') }}" style="border-radius: 30px">
                                </div>
                            </div>

                            <div class="columns is-vcentered is-centered">
                                <div class="column is-5">
                                    <p class="subtitle is-5 is-size-4-desktop has-text-white">
                                        Un pre-registro indica que ya se ha iniciado un registro por parte de tu coordinador, 
                                        cual te proporcionará un código para que puedas finalizar y confirmar todos tus datos.
                                    </p>
                                </div>
                    
                                <div class="column is-5-tablet is-5-desktop has-text-centered is-hidden-mobile">
                                    <div class="columns is-centered">
                                        <div class="column is-10-desktop">
                                            <img src="{{ asset('img/Codigo.png') }}" style="border-radius: 30px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </li>

                <li style="width: 100%">
                    <div class="columns is-vcentered is-centered" style="height: 100%;">
                        <div class="is-hidden-desktop"><br><br><br><br><br><br><br><br><br><br></div>
                        <div class="column has-text-centered" >
                            <p class="title is-size-1-desktop has-text-success">FORMULARIO </p>
                            <p class="sub-title is-size-3-desktop has-text-white">Detalles que debes tener en cuenta.</p>
                        </div>
                    </div>  
                </li>

                <li style="width: 100%;">
                    <br>
                    <div class="columns is-centered" style="height: 100%; overflow-y: scroll; overflow-x: hidden;">

                        <div class="column is-11-mobile" style="margin:auto" >
                            <div class="columns is-multiline is-centered">

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
                                
                                <div class="column is-5">
                                    <p class="title is-size-3-desktop has-text-white">
                                        <span class="icon has-text-primary" style="margin-right: 20px;">
                                            <i class="fas fa-certificate"></i>
                                        </span>
                                        Código</p>
                                    <p class="subtitle is-size-4-desktop has-text-white">
                                        Tu código es único y no debes compartirlo ya que contiene pre-cargado tu escuela, comité y país.
                                    </p>
                                </div>

                                <div class="column is-6">
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
                        </div>
                    </div> 
                </li>

                <li style="width: 100%">
                    <div class="columns is-vcentered is-centered" style="height: 100%;">
                        <div class="is-hidden-desktop"><br><br><br><br><br><br><br><br><br><br></div>
                        <div class="column has-text-centered" >
                            <p class="title is-size-1-desktop has-text-success">RESUMEN</p>
                            <p class="sub-title is-size-3-desktop has-text-white">El último punto de control.</p>
                        </div>
                    </div>  
                </li>

                <li style="width: 100%">
                    <div class="columns is-vcentered is-centered" style="height: 100%; overflow-y: scroll; overflow-x: hidden">
                        <div class="is-hidden-desktop"><br><br></div>

                        <div class="column">
                            <div class="columns is-centered">
                                <div class="column is-5 has-text-centered">
                                    <p class="title is-size-3-desktop has-text-success">Enviando los datos</p>
                                </div>
                            </div>
                            <br>

                            <div class="columns is-hidden-tablet is-hidden-desktop is-centered is-mobile">
                                <div class="column is-10-mobile is-1-tablet">
                                    <img src="{{ asset('img/inscripcion.png') }}" style="border-radius: 30px">
                                </div>
                            </div>

                            <div class="columns is-vcentered is-centered">
                                <div class="column is-5">
                                    <p class="subtitle is-5 is-size-4-desktop has-text-white">
                                        Después de presionar el botón "enviar", verás un resumen de tus datos para que puedas confirmar que todos son correctos,
                                        en este punto podrás corregirlos todavía.
                                    </p>
                                </div>
                    
                                <div class="column is-5-tablet is-5-desktop has-text-centered is-hidden-mobile">
                                    <div class="columns is-centered">
                                        <div class="column is-10-desktop">
                                            <img src="{{ asset('img/inscripcion.png') }}" style="border-radius: 30px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </li>

                <li style="width: 100%">
                    <div class="columns is-vcentered is-centered" style="height: 100%;">
                        <div class="is-hidden-desktop"><br><br><br><br><br><br><br><br><br><br></div>
                        <div class="column has-text-centered" >
                            <p class="title is-size-1-desktop has-text-success">E-MAIL</p>
                            <p class="sub-title is-size-3-desktop has-text-white">Recibirás un correo con datos importantes, no olvides buscar en la carpeta de spam.</p>
                        </div>
                    </div>  
                </li>

                <li style="width: 100%">
                        <div class="columns is-vcentered is-centered" style="height: 100%;">
                            <div class="is-hidden-desktop"><br><br><br><br><br></div>
                            <div class="column has-text-centered" >
                                <p class="title is-size-1-desktop has-text-success">¿List@ para registrarte?</p>
                                <br><br>
                                <div class="columns has-text-centered is-centered">
                                        <div class="column is-3">
                                            <a href="{{ route('modulo.completo') }}" class="button is-white is-rounsded is-outlined is-large">Registro completo</a>
                                        </div>
                                        <div class="column is-3">
                                            <a href="{{ route('modulo.codigo') }}" class="button is-white is-roundesd is-outlined is-large">Tengo un código</a>
                                        </div>
                                    </div>

                            </div>
                        </div>  
                    </li>
    
            </ul>

            <a style="position: absolute;top: 90%;" href="#" class="button is-white is-outlined" uk-slider-item="previous">
                <i class="fas fa-chevron-left"></i>
            </a>
            <a style="position: absolute;top: 90%;right: 0px;" href="#" class="button is-white is-outlined" uk-slider-item="next">
                <i class="fas fa-chevron-right"></i>
            </a>

        </div>
    </div>   
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/ui-kit.css') }}">
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/slider-uikit/uikit.js') }}"></script> 
@endsection