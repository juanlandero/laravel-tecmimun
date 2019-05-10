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
<section class="section">
    <div class="columns has-text-centered">
        <div class="column">
            <span class="title is-size-1-desktop has-text-primary">CARTA DE </span>
            <span class="title is-size-1-desktop has-text-success"> BIENVENIDA</span>
        </div>
    </div>
    <hr>
</section>

<section class="section">
    <div class="container">
        <div class="columns is-vcentered">
           
            <div class="column is-8-desktop" uk-scrollspy="cls: uk-animation-fade; repeat: false; delay: 700">
                
                <p class="subtitle is-size-4-desktop has-text-justified has-text-black">
                    Queridos delegados, organizadores y faculties asistentes a TECMIMUN 2019 – 
                    Campus Villahermosa.
                </p>
                <p class="subtitle is-size-4-desktop has-text-justified has-text-black">
                    Es todo un honor para mí dirigirme a ustedes como la primera Secretaria General 
                    del Modelo de las Naciones Unidas de la Universidad Tecmilenio. Me siento entusiasmada 
                    de ser parte del Comité Organizador de la Primera Edición de TECMIMUN, el cuál se llevará 
                    acabo los días 24 y 25 de mayo, 2019.
                </p>
                <p class="subtitle is-size-4-desktop has-text-justified has-text-black">
                    Todo comenzó como iniciativa de cinco alumnos con el sueño de formar parte de la red
                     de Modelos de Naciones Unidas en el estado de Tabasco y ser parte del desarrollo de
                      habilidades de los jóvenes de hoy. Buscamos el apoyo de nuestro Campus y de tal manera,
                       formar el comité organizador. Dicho comité se caracteriza por el entusiasmo, 
                       creatividad, compromiso, responsabilidad, el ser proactivos y sobre todo la pasión
                        que cada uno de nosotros tiene por este proyecto que hoy es una realidad.
                </p>
                
            </div>
            <div class="column is-4-desktop is-hidden-mobile" uk-scrollspy="cls: uk-animation-slide-right; repeat: false; delay: 700">
                <img src="{{ asset('img/carta.jpg') }}">
            </div>

        </div>
        <div class="columns" uk-scrollspy="cls: uk-animation-fade; repeat: false; delay: 700">
            <div class="column">
                <p class="subtitle is-size-4-desktop has-text-justified has-text-black">
                    Con este modelo desarrollarás diversas habilidades entre las cuales destaca 
                    el poder solucionar problemáticas que observamos día a día, administración del 
                    tiempo y planeación, dominio de la situación, mejorar nuestras relaciones al 
                    interactuar con jóvenes con quienes no convivimos regularmente y conocer cada 
                    vez más acerca de lo que sucede a nuestro alrededor y como estas acciones repercuten en nosotros.

                </p>
                <p class="subtitle is-size-4-desktop has-text-justified has-text-black">
                    Para finalizar, me gustaría reiterar la alegría que me genera el que ustedes formen
                     parte de esta historia que apenas comienza, y recuerden; “Sólo existen dos días en 
                     el año en que no se puede hacer nada. Uno se llama ayer y otro mañana. Por lo tanto,
                      hoy es el día ideal para amar, crecer, hacer y principalmente vivir”. (Dalai Lama) 
                      Por lo tanto, hoy es el día ideal para formar parte de TECMIMUN 2019.

                </p>
            </div>
        </div>

        <div class="columns is-vcentered" uk-scrollspy="cls: uk-animation-fade; repeat: false; delay: 700">
            <div class="column has-text-centered has-text-primary">
                <p class="subtitle is-size-4-desktop has-text-primary">Atentamente</p>
                <p class="subtitle is-size-4-desktop is-marginless has-text-primary">Mónica Danaé Juárez López</p>
                <p class="subtitle is-size-4-desktop is-marginless has-text-primary">Secretaria General</p>
                <p class="subtitle is-size-4-desktop has-text-primary">TECMIMUN 2019</p>
            </div>
            <div class="column is-hidden-tablet is-hidden-desktop">
                <div class="columns is-centered">
                    <div class="column is-6">
                        <img src="{{ asset('img/carta.jpg') }}" >
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="section" uk-scrollspy="cls: uk-animation-fade; repeat: false; delay: 700">
    <div class="is-hidden-mobile"><br><br><br></div>
    <br><br><br>
    <div class="container">
        <div class="columns has-text-centered">
            <div class="column">
                <span class="title is-size-1-desktop has-text-primary">INICIAR </span>
                <span class="title is-size-1-desktop has-text-success"> SESIÓN</span>
            </div>
        </div>
        <hr>
        <div class="columns has-text-centered">
            <div class="column">
                <span class="subtitle">
                    Sólo si te han propocionado el usuario para que accedas a tu sesión.
                </span>
            </div>
        </div>
        <div class="columns has-text-centered">
            <div class="column">
                <button class="button is-primary is-rounded is-outlined" onclick="toggleModal('#modal_login')">Iniciar sesión</button>
            </div>
        </div>
    </div>
    <br><br><br>
    <br><br>          
</section>


<section class="section" uk-scrollspy="cls: uk-animation-fade; repeat: false; delay: 700">
    <div class="columns has-text-centered">
        <div class="column">
            <i class="fas fa-users fa-3x has-text-success" style="margin-bottom: 15px"></i>
            <h1 class="title is-size-3-desktop has-text-primary">SECRETARIADO</h1>
            <hr>
            <a href="{{ route('modulo.nosotros') }}" class="button is-rounded is-success is-outlined">Conocenos</a>
        </div>
        <br><br><br>
        <div class="column">
            <i class="fas fa-atlas fa-3x has-text-success" style="margin-bottom: 15px"></i>
            <h1 class="title is-size-3-desktop has-text-primary">COMITÉS</h1>
            <hr>
            <a href="{{ route('index.comites') }}" class="button is-rounded is-success is-outlined">Ver</a>
        </div>
        <br><br><br>
        <div class="column">
            <i class="fas fa-clipboard-check fa-3x has-text-success" style="margin-bottom: 15px"></i>
            <h1 class="title is-size-3-desktop has-text-primary">REGISTRO</h1>
            <hr>
            <a href="{{ route('modulo.codigo') }}" class="button is-rounded is-success is-outlined">Registrate</a>
        </div>
    </div>
</section>
<br><br><br>

    @include('index.modal.login')
@endsection

@section('scripts')
    <script src="{{ asset('js/index/index.js') }}"></script>
@endsection