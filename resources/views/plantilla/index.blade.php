<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('img/logo/icono.png') }}" type="image/x-icon">
    <title>Tecmimun | @yield('titulo')</title>

    <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ui-kit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icon/all.css') }}">
</head>
<body>
  
@section('body')
@show

<footer class="footer" uk-scrollspy="cls:uk-animation-fade; delay: 500">
    <div class="columns footer-primary is-centered has-text-centered is-mobile">
            <div class="column is-1-desktop">
                <a class="button is-success is-outlined" href="https://www.facebook.com/">
                  <span class="icon is-medium">
                    <i class="fab fa-facebook-f fa-lg"></i>
                  </span>
                </a>
            </div>
            <div class="column is-1-desktop">

                <a class="button is-success is-outlined" href="https://www.instagram.com/tecmimunvhsa/" target="_blank">
                  <span class="icon is-large">
                    <i class="fab fa-instagram fa-lg"></i>
                  </span>
                </a>
            </div>
            <div class="column is-1-desktop">
                <a class="button is-success is-outlined">
                  <span class="icon is-medium">
                    <i class="fas fa-envelope fa-lg"></i>
                  </span>
                </a>
            </div>
            <div class="column is-1-desktop">

                <a class="button is-success is-outlined">
                  <span class="icon is-medium">
                    <i class="fab fa-snapchat-ghost fa-lg"></i>
                  </span>
                </a>
            </div>
    </div>
    <div class="content has-text-centered">
        <p class="title is-size-5 has-text-white">TECMIMUN 2019</p>
    </div>
</footer>

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