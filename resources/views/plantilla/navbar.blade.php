<nav class="navbar is-spaced" role="navigation" aria-label="main navigation" >
    <div class="container">
        <div class="navbar-brand">
                <a class="navbar-item" href="{{ route('index') }}">
                <img src="img/logo/logo.png" height="100%" >
            </a>
        
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        
        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                
            </div>
        
            <div class="navbar-end">
                <a class="navbar-item" href="{{ route('index') }}" >Inicio</a>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">Acerca</a>
                    <div class="navbar-dropdown is-right">
                        <a class="navbar-item" href="{{ Route('Nosotros') }}">Modelo</a>
                        <a class="navbar-item" href="{{ Route('Protocolo') }}">Protocolo</a>
                        <a class="navbar-item" href="{{ Route('Contacto') }}">Contacto</a>                          
                    </div>
                </div> 
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">Registro</a>
                    <div class="navbar-dropdown is-right">
                        <a class="navbar-item" href="{{ route('ComoRegistrarse') }}">Como registrarse</a>
                        <a class="navbar-item" href="{{ route('Costos') }}">Fechas</a>
                        <a class="navbar-item">Costos</a>                          
                    </div>
                </div> 
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">Comites</a>
                    <div class="navbar-dropdown is-right">
                        <a class="navbar-item" href="{{ route('infoComites') }}">Información de comités</a>
                        <a class="navbar-item" href="{{ route('CriterioPremiacion') }}">Criterios de premiación</a>
                        <a class="navbar-item" href="{{ route('Antecedentes') }}">Antecedentes</a>
                        <a class="navbar-item" href="{{ route('Posiciones') }}">Posiciones oficiales</a>                            
                        <a class="navbar-item" href="{{ route('RecursosApoyo') }}">Recursos de apoyo</a>                            
                    </div>
                </div>                      
            </div>
        </div>
    </div>
</nav>