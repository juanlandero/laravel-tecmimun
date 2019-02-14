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
                    <a class="button is-danger is-outlined" href="{{ route('admin.index') }}">Inicio</a>
                    <a class="button is-danger is-outlined" href="{{ route('admin.pais') }}">País</a>
                    <a class="button is-danger is-outlined" href="{{ route('admin.comite') }}">Comité</a>
                    <a class="button is-danger is-outlined" href="{{ route('admin.escuela') }}">Escuela</a>
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

</body>
</html>