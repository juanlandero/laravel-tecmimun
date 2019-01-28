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
 
<nav class="navbar is-transparent">
    <div class="navbar-brand">
        <a class="navbar-item" href="#">Administrador - @yield('seccion')</a>
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
                    <a class="button is-info is-outlined" href="{{ route('admin.pais') }}">País</a>
                    <a class="button is-info is-outlined" href="{{ route('admin.comite') }}">Comité</a>
                    <a class="button is-info is-outlined" href="{{ route('admin.escuela') }}">Escuela</a>
                    <a class="button is-info is-outlined" href="{{ route('admin.paiscomite') }}">Config. Comité</a>        
                </div>
            </div>       
        </div>
    </div>
</nav>

<section class="section">
    <div class="container">
        @section('body')
        @show
    </div>
</section>

</body>
</html>