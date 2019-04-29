@extends('index.plantilla.main-index')

@section('titulo', 'Inicio')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/loader.css') }}">
@endsection

@section('body')
    @if (session()->has('prueba'))
        {{ session('prueba') }}
        {{ session()->flush() }}
    @endif

<!-- carta de bienvenida -->
<section class="hero is-light is-bold">
    <div class="hero-body ">
        <div class="container has-text-centered">
            <h1 class="title has-text-primary">Carta de Bienvenida</h1>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="columns is-vcentered">
           
            <div class="column is-12" uk-scrollspy="cls: uk-animation-slide-right; repeat: false; delay: 700">
                
                <p class="subtitle is-size-4-desktop has-text-black">
                    Queridos delegados, organizadores y advisors asistentes a TECMIMUN 2019 – Campus Villahermosa.
                </p>
                <p class="subtitle is-size-4-desktop has-text-black">
                    Es todo un honor para mí dirigirme a ustedes como la primera Secretaria General del Modelo de las Naciones Unidas de la Universidad Tecmilenio. Mi nombre es Mónica Danaé Juárez López y me siento entusiasmada de ser parte del Comité Organizador de la Primera Edición de TECMIMUN, el cuál se llevará acabo los días 24 y 25 de mayo, 2019.
                </p>
                <p class="subtitle is-size-4-desktop has-text-black">
                    Todo comenzó como iniciativa de cinco alumnos con el sueño de formar parte de la red de Modelos de Naciones Unidas en el estado de Tabasco y ser parte del desarrollo de habilidades de los jóvenes de hoy. Buscamos el apoyo de nuestro Campus y de tal manera, formar el comité organizador. Dicho comité se caracteriza por el entusiasmo, creatividad, compromiso, responsabilidad, el ser proactivos y sobre todo la pasión que cada uno de nosotros tiene por este proyecto que hoy es una realidad.
                </p>
                <p class="subtitle is-size-4-desktop has-text-black">
                    Con este modelo desarrollarás diversas habilidades entre las cuales destaca el poder solucionar problemáticas que observamos día a día, administración del tiempo y planeación, dominio de la situación, mejorar nuestras relaciones al interactuar con jóvenes con quienes no convivimos regularmente y conocer cada vez más acerca de lo que sucede a nuestro alrededor y como estas acciones repercuten en nosotros.
                </p>
                <p class="subtitle is-size-4-desktop has-text-black">
                    Para finalizar, me gustaría reiterar la alegría que me genera el que ustedes formen parte de esta historia que apenas comienza, y recuerden; “Sólo existen dos días en el año en que no se puede hacer nada. Uno se llama ayer y otro mañana. Por lo tanto, hoy es el día ideal para amar, crecer, hacer y principalmente vivir”. (Dalai Lama).
                </p>
            </div>
        </div>

    </div>
</section>

<!-- otras secciones -->
<div style="">
    <section class="hero">
        <div class="columns is-vcentered" style="height: 500px; background-color:">
            <div class="column">
                <div class="columns is-centered">
                    <div class="column is-7">
                        <img src="{{ asset('img/slider/slide1.jpg') }}" style="border-radius: 10px;">
                    </div>
                </div>
            </div>
            <div class="column">
                <h1 class="title is-size-2-desktop has-text-primary">Secretariado</h1>
                <p class="subtitle">Estamos listos para recibirte en este tecmimun</p>
                <hr><br>
                <button class="button is-primary is-outlined">Conocenos</button>
            </div>
        </div>
    </section>

    <section class="hero">
        <div class="columns is-vcentered has-text-right" style="height: 500px; background-color: ">
            <div class="column">
                <h1 class="title is-size-2-desktop has-text-primary">Comites</h1>
                <p class="subtitle">Estamos listos para recibirte en este tecmimun</p>
                <hr><br>
                <button class="button is-primary is-outlined">Conocenos</button>
            </div>
            <div class="column">
                <div class="columns is-centered">
                    <div class="column is-7">
                        <img src="{{ asset('img/slider/slide1.jpg') }}" style="border-radius: 10px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero">
        <div class="columns is-vcentered" style="height: 500px; background-color:">
            <div class="column">
                <div class="columns is-centered">
                    <div class="column is-7">
                        <img src="{{ asset('img/slider/slide1.jpg') }}" style="border-radius: 30px;">
                    </div>
                </div>
            </div>
            <div class="column">
                <h1 class="title is-size-2-desktop has-text-primary">Registro</h1>
                <p class="subtitle">Estamos listos para recibirte en este tecmimun</p>
                <hr><br>
                <button class="button is-rounded is-success is-outlined">Registrate</button>
            </div>
        </div>
    </section>
</div>


    @include('index.modal.login')

@endsection

@section('scripts')
    <script src="{{ asset('js/index/index.js') }}"></script>
@endsection