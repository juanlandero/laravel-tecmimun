<nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" id="titulo"><i class="fas fa-user-circle" style="margin-right: 10px;"></i> {{ Auth::user()->name }}</a>
    
        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
  
    <div id="navbarBasicExample" class="navbar-menu">  
        <div class="navbar-end">
            @if (Auth::user()->pk_permisos == 1)
                <div class="navbar-item">
                    <div class="select is-primary">
                            <select id="comite_admin">
                                <option value="0">Elige un comité</option>
                                @foreach (session('comites') as $comite)
                                    @if (session('key_comite') && session('key_comite') == $comite->id)
                                        <option value="{{ $comite->id }}" selected>{{ $comite->nombre }}</option>
                                    @else
                                        <option value="{{ $comite->id }}">{{ $comite->nombre }}</option>
                                    @endif
                                @endforeach
                        </select>
                    </div>
                </div>
            @endif
            <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Cerrar sesión <i class="fas fa-sign-out-alt" style="margin-left: 10px;"></i></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
        </div>
    </div>
</nav>