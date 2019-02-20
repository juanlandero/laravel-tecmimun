<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>


    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ui-kit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icon/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dynatable.css') }}">
</head>
<body>

    <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" id="titulo">
                Dashboard
            </a>
        
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
      
        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                    {{ Auth::user()->codigo }}
            </div>
      
            <div class="navbar-end">
                <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout - {{ Auth::user()->name }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </nav>

    <div class="container-side">
        <aside class="menu">
            <a class="aside-item" onclick="listaPaises()">
                <span class="icon is-large">
                    <i class="fas fa-lg fa-clipboard-list"></i>
                </span>
            </a>
            <a class="aside-item" onclick="panelPuntaje()">
                <span class="icon is-large">
                    <i class="fas fa-lg fa-thumbs-up"></i>
                </span>                
            </a>
            <a class="aside-item" href="{{ route('dashboard.welcome') }}">
                <span class="icon is-large">
                    <i class="fas fa-lg fa-fingerprint"></i>
                </span>                
            </a>
            <a class="aside-item" href="#">
                item              
            </a>
            
        </aside>
    </div>


    <div class="container-dash">
        
          <div class="container">
            <div class="columns is-mobile is-centered">
                <div class="column is-11" id="contenido">
                    <p class="title is-size-3-desktop has-text-center">Bienvenido al dashboard</p>
                </div>
            </div>
        </div>

    </div>




<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/dynatable.js') }}"></script>
<script>

function listaPaises(){
    $('#contenido').load('getLista');
    $('#titulo').html('Pase de lista');
}

function panelPuntaje(){
    $('#contenido').load('getPuntos')
    $('#titulo').html('Panel de puntos');
}

document.addEventListener('DOMContentLoaded', () => {

// Get all "navbar-burger" elements
const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Check if there are any navbar burgers
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