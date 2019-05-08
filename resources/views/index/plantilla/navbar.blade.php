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
                <!--a class="navbar-item" href="{{-- route('index') --}}" >Inicio</a-->
                <a class="navbar-item" onclick="toggleModal('#modal_login')">Iniciar sesión</a>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">Acerca</a>
                    <div class="navbar-dropdown is-right">
                        <a class="navbar-item" href="{{ Route('modulo.nosotros') }}">Modelo</a>
                        <a class="navbar-item" href="{{ Route('modulo.protocolo') }}">Protocolo</a>
                        <a class="navbar-item" href="{{ Route('modulo.contacto') }}">Contacto</a>                          
                    </div>
                </div> 
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">Registro</a>
                    <div class="navbar-dropdown is-right">
                        <a class="navbar-item" href="{{ route('modulo.registro') }}">Como registrarse</a>
                        <a class="navbar-item" href="{{ route('modulo.costos') }}">Fechas y Costos</a>
                    </div>
                </div> 
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">Comites</a>
                    <div class="navbar-dropdown is-right">
                        <a class="navbar-item" href="{{ route('index.comites') }}">Información de comités</a>
                        <a class="navbar-item" href="{{ route('modulo.premiacion') }}">Criterios de premiación</a>
                        <a class="navbar-item" href="{{ route('modulo.antecedentes') }}">Antecedentes</a>
                        <a class="navbar-item" href="{{ route('modulo.posiciones-oficiales') }}">Posiciones oficiales</a>                            
                        <a class="navbar-item" href="{{ route('modulo.recursos-apoyo') }}">Recursos de apoyo</a>                            
                    </div>
                </div>     
                <a class="navbar-item" href="{{ route('modulo.patrocinadores') }}">Patrocinadores</a>                 
            </div>
        </div>
    </div>
</nav>