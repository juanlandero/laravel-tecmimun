<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Tecmimun | @yield('titulo')</title>

    <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ui-kit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icon/all.css') }}">
    <style>
    body, html, section{
        margin: 0px;
        height: 100%;
    }
    .footer{
      position: absolute;
      bottom: 0px;
      right: 0px;
      left: 0px;
    }
    .container{
      margin-top: 5%
    }
    </style>
</head>
<body>
<section style="height: 100%">
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
    
        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
              <div class="navbar-item">
                  {{ Auth::user()->name }}
              </div>
          </div>
          

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Cerrar sesión</a>
                        
                    </div>
                </div>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </nav>
    
    
    <div class="container">
        <div class="columns is-centered is-vcentered">
            <div class="column is-10 has-text-centered">
                @if ($resultado)
                    <table class="table is-fullwidth">
                        <thead>
                            <tr>
                                <th>Alumno</th>
                                <th>Código</th>
                                <th>País</th>
                                <th>Comité</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($texto as $alumno)
                                <tr>
                                    <td>{{ $alumno->alumno }}</td>
                                    <td>{{ $alumno->codigo }}</td>
                                    <td>{{ $alumno->pais }}</td>
                                    <td>{{ $alumno->comite }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                    <div class="columns">
                      <div class="column">
                          <a href="{{ route('excelEscuelas') }}" class="button is-success is-rounded">
                                <span class="icon is-small">
                                    <i class="fas fa-file-excel"></i>
                                </span>
                                <span>Descargar</span>
                          </a>
                      </div>
                    </div>
                @else
                    <p class="title is-size-3-desktop has-text-success">{{ $texto }}</p>
                @endif
            </div>
        </div>
    </div>


    <footer class="footer" uk-scrollspy="cls:uk-animation-fade; delay: 500">
        <div class="content has-text-centered">
            <p class="title is-size-5 has-text-white">TECMIMUN 2019</p>
        </div>
    </footer>
</section>
<script>
document.addEventListener('DOMContentLoaded', () => {

const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

if ($navbarBurgers.length > 0) {

        // Add a click event on each of them
    $navbarBurgers.forEach( el => {
        el.addEventListener('click', () => {
            // Get the target from the "data-target" attribute
            const target = el.dataset.target;
            const $target = document.getElementById(target);

            // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
            el.classList.toggle('is-active');
            $target.classList.toggle('is-active');
        });
    });
}

});
</script>
</body>
</html>