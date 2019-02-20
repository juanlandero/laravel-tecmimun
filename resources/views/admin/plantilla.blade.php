<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icon/all.css') }}">
</head>
<body>
 
<nav class="navbar is-bluegrey is-fixed-top">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">Logout - {{ Auth::user()->name }}</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
        <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
        <span></span>
        <span></span>
        <span></span>
        </div>
    </div>
              
    <div id="navbarExampleTransparentExample" class="navbar-menu">
              
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-success is-inverted is-outlined" href="{{ route('admin.index') }}">Inicio</a>
                    <a class="button is-success is-inverted is-outlined" href="{{ route('admin.pais') }}">País</a>
                    <a class="button is-success is-inverted is-outlined" href="{{ route('admin.comite') }}">Comité</a>
                    <a class="button is-success is-inverted is-outlined" href="{{ route('admin.escuela') }}">Escuela</a>
                </div>
            </div>       
        </div>
    </div>
</nav>

<section class="section">
    <br>
    <div class="container">
        @section('body')
        @show
    </div>
</section>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script>

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