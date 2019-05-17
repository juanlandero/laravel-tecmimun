
@extends('modulos.plantilla.main-full')

@section('titulo', 'Advisor')

@section('body')
<section style="height: calc(100% - 54px);">
    <nav class="navbar is-primary" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
    
        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <div class="navbar-item"><i class="fas fa-user-circle" style="margin-right: 10px;"></i>{{ Auth::user()->name }}</div>
            </div>

            <div class="navbar-end">
                    @if ($resultado)
                        <a href="{{ route('excelEscuelas') }}" class="navbar-item">
                            <i class="fas fa-file-excel" style="margin-right: 10px;"></i>Descargar tabla
                        </a>
                    @endif
                    <!--a href="http://chat.tecmimun.com" class="navbar-item"><i class="fas fa-comment" style="margin-right: 10px;"></i>Ver chat</a-->
                    <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Cerrar sesión<i class="fas fa-sign-out-alt" style="margin-left: 10px;"></i></a>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </nav>
          
    <div class="section">
        <div class="columns is-centered is-vcentered" >
            <div class="column is-10 has-text-centered">
                @if ($resultado)
                    <table class="table is-fullwidth" data-toggle="table" data-search="true" style="font-size: 15px;">
                        <thead>
                            <tr>
                                <th>ALUMNO</th>
                                <th>E-MAIL</th>
                                <th>PAÍS</th>
                                <th>COMITÉ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($texto as $alumno)
                                <tr>
                                    <td>{{ $alumno->alumno }}</td>
                                    <td>{{ $alumno->mail }}</td>
                                    <td>{{ $alumno->pais }}</td>
                                    <td>{{ $alumno->comite }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p class="title is-size-3-desktop has-text-success">{{ $texto }}</p>
                @endif
            </div>
        </div>
        
    </div>
</section>


@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('js/table/bootstrap-table.css') }}">
@endsection
@section('scripts')
    <script src="{{ asset('js/table/bootstrap-table.js') }}"></script>    
@endsection