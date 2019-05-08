@extends('modulos.plantilla.main-index')

@section('titulo', 'Acerca de nosotros')

@section('body')

@section('contenido-navbar')
    <img src="{{ asset('img/portadas/modelo.jpg') }}" >
@endsection

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-8">
                <h2 class="title is-size-3-desktop">¿QUÉ ES TECMIMUN?</h2>
                <p class="subtitle">
                    TECMIMUN son dos días de simulación continua de las Naciones Unidas donde 
                    alumnos de todos los niveles educativos interactúan entre sí mediante el debate 
                    y la diplomacia para resolver problemas de importancia global al tomar parte 
                    de los roles de representantes de las delegaciones de las Naciones Unidas.
                </p>
                <p class="subtitle">
                    Los alumnos aprenden acerca del funcionamiento y manejo de la política global 
                    además de la resolución de problemas, gracias al que estar conscientes de los 
                    problemas que afectan a nuestra sociedad hoy en día se muestra una nueva 
                    perspectiva y desarrollo sobre soluciones integrales a los temas de importancia 
                    global
                </p>
            </div>
    
    
            <div class="column is-4">
                <br>
                <div class="columns has-text-centered">
                    <div class="column">
                        <p><i class="fas fa-users fa-3x"></i></p>
                        <p style="margin-top: 10px"><a href="{{ route('modulo.nosotros') }}" class="button is-white">Secretariado</a></p>
                    </div>
                </div>

                <div class="columns has-text-centered">
                    <div class="column">
                        <p><i class="fas fa-atlas fa-3x"></i></p>
                        <p style="margin-top: 10px"><a href="{{ route('modulo.registro') }}" class="button is-white">Comités</a></p>
                    </div>
                </div>

                <div class="columns has-text-centered">
                    <div class="column">
                        <p><i class="fas fa-clipboard-check fa-3x"></i></p>
                        <p style="margin-top: 10px"><a href="{{ route('modulo.registro') }}" class="button is-white">Registro</a></p>
                    </div>
                </div>
                <br>
            </div>     
        </div>
    </div>
</section>


<section class="section">
    <div class="container">

        <!-- Secretariado -->
        <div class="columns has-text-centered">
            <div class="column">
                <span class="title is-size-2-desktop has-text-success">SECRETARIADO</span>
            </div>
        </div>

        <div class="columns">
            <div class="column is-3 has-text-centered">
                <img style="border-radius: 10px;" src="{{ asset('img/secretariado/1.jpg') }}" alt="">
                <strong>Secretaria General</strong>
                <p>Mónica Danaé Juárez López</p>
            </div>

            <div class="column is-3 has-text-centered">
                <img style="border-radius: 10px;" src="{{ asset('img/secretariado/2.jpg') }}" alt="">
                <strong>Coordinador General</strong>
                <p>Arturo Ordaz Magaña</p>
            </div>

            <div class="column is-3 has-text-centered">
                <img style="border-radius: 10px;" src="{{ asset('img/secretariado/3.jpg') }}" alt="">
                <strong>Secretario Adjunto</strong>
                <p>Alfredo Adriel Ocampo Hernández</p>
            </div>

            <div class="column is-3 has-text-centered">
                <img style="border-radius: 10px;" src="{{ asset('img/secretariado/4.jpg') }}" alt="">
                <strong>Secretaria de Organización</strong>
                <p>Alina Trujillo Brahms</p>
            </div>
        </div>
        <div class="columns">
            <div class="column is-3 has-text-centered">
                <img style="border-radius: 10px;" src="{{ asset('img/secretariado/5.jpg') }}" alt="">
                <strong>Secretario de Asuntos Académicos</strong>
                <p>Daniel Abraham Cabrera Gallegos</p>
            </div>

            <div class="column is-3 has-text-centered">
                <img style="border-radius: 10px;" src="{{ asset('img/secretariado/6.jpg') }}" alt="">
                <strong>Secretaria de Hospitalidad</strong>
                <p>Karina Gabriela Pancardo Hernández</p>
            </div>

            <div class="column is-3 has-text-centered">
                <img style="border-radius: 10px;" src="{{ asset('img/secretariado/7.jpg') }}" alt="">
                <strong>Secretariado de Comunicación</strong>
                <p>Anel Noelia Canepa Corona</p>
                <p>Karina Guadalupe Martínez  Martínez</p>
            </div>

            <div class="column is-3 has-text-centered">
                <img style="border-radius: 10px;" src="{{ asset('img/secretariado/8.jpg') }}" alt="">
                <strong>Equipo de Diseño</strong>
                <p>Mafer Domínguez Rodríguez Feria</p>
                <p>Irving del Carmen Arias González</p>
            </div>
        </div>
        <div class="columns">
            <div class="column is-3 has-text-centered">
                <img style="border-radius: 10px;" src="{{ asset('img/secretariado/9.jpg') }}" alt="">
                <strong>Jefe de Diseño</strong>
                <p>Vicente Arturo Trujillo Córdova</p>
            </div>

            <div class="column is-3 has-text-centered">
                <img style="border-radius: 10px;" src="{{ asset('img/secretariado/11.jpg') }}" alt="">
                <strong>Equipo de Presentación</strong>
                <p>Irving del Carmen Arias González</p>
                <p>Iatai Mireya Lerin Guarneros</p>
                <p>Cecilia del Rosario Vázquez García</p>
                <p>Geraldine Inguanzo Samberino</p>
            </div>

            <div class="column is-3 has-text-centered">
                <img style="border-radius: 10px;" src="{{ asset('img/secretariado/10.jpg') }}" alt="">
                <strong>Director de Diseño</strong>
                <p>Héctor Rubén Cortez Hernández</p>
            </div>
        </div>
     


        <!-- Mesas --> <br><br>
        <div class="columns has-text-centered">
            <div class="column">
                <span class="title is-size-2-desktop has-text-success">MESAS</span>
            </div>
        </div>
        <div class="columns has-text-centered">
            <div class="column is-4">
                <img style="border-radius: 10px;" src="{{ asset('img/mesas/1.jpg') }}" alt="">
                <p class="title">AG</p>
                <strong>Presidenta:</strong>
                <p>Jani Escobar Martínez</p>
                <strong>Moderadores</strong>
                <p>Eduardo Ramìrez Sister Gutierrez</p>
                <p>Gustavo Antonio Sánchez Martínez</p>
            </div>
            <div class="column is-4">
                <img style="border-radius: 10px;" src="{{ asset('img/mesas/2.jpg') }}" alt="">
                <p class="title">HHRC</p>
                <strong>Presidente:</strong>
                <p>Uriel Iván Arévalo Miranda</p>
                <strong>Moderadores</strong>
                <p>Marijose Martínez Jardín</p>
                <p>Cesár Jesús Alonso Rodríguez</p>
            </div>
            <div class="column is-4">
                <img style="border-radius: 10px;" src="{{ asset('img/mesas/3.jpg') }}" alt="">
                <p class="title">SC</p>
                <strong>Presidenta:</strong>
                <p>Shayla Kimberly West</p>
                <strong>Moderadores</strong>
                <p>Jesús Leonardo Cabrera Mejía</p>
                <p>Francisco Rodriguez García Muñoz</p>
            </div>
        </div>
        <div class="columns has-text-centered is-centered">
            <div class="column is-4">
                <img style="border-radius: 10px;" src="{{ asset('img/mesas/4.jpg') }}" alt="">
                <p class="title">OEA</p>
                <strong>Presidente:</strong>
                <p>René Genaro Bello Roano</p>
                <strong>Moderadores</strong>
                <p>Carlos Mario Ramos Maldonado</p>
                <p>Edgar Adolfo Martínez Suárez</p>
            </div>
            <div class="column is-4">
                <img style="border-radius: 10px;" src="{{ asset('img/mesas/5.jpg') }}" alt="">
                <p class="title">AGF</p>
                <strong>Presidente:</strong>
                <p>Hugo Emmanuel Rodríguez Kanga</p>
                <strong>Moderadores</strong>
                <p>Sebastián José Rodríguez Malavé</p>
                <p>Camila Alejandra Álvarez Lemus</p>
            </div>
        </div>
        
    </div>
</section>
@endsection
