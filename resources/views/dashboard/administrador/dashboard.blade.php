<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icon/all.css') }}">
</head>
<body>

@include('dashboard.plantilla.navbar')

@include('dashboard.plantilla.sidebar-admin')

    <div class="container-dash">
        
          <div class="container">
            <div class="columns is-mobile is-centered">
                <div class="column is-11" id="contenido">
                   
                    <p class="title is-size-3-desktop has-text-center">Bienvenido al dashboard</p>

                    <section class="section">
                        <nav class="panel">
                            <p class="panel-heading">Pre-inscripciones <span style="float: right">Total: {{ $n_pre }}</span></p> 
                            <div class="panel-block">
                                <div class="container">
                                    <table class="table is-fullwidth">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>CÓDIGO</th>
                                                <th>PAÍS</th>
                                                <th>COMITÉ</th>
                                                <th>ESCUELA</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pre as $alumno)
                                                <tr>
                                                    <td>{{ $alumno->id }}</td>
                                                    <td>{{ $alumno->codigo }}</td>
                                                    <td>{{ $alumno->pais }}</td>
                                                    <td>{{ $alumno->comite }}</td>
                                                    <td>{{ $alumno->escuela }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                    
                            </div>
                        </nav>
                    </section>
                    
                    <section class="section">
                        <nav class="panel">
                            <p class="panel-heading">Inscritos <span style="float: right">Total: {{ $n_ins }}</span></p>
                            <div class="panel-block">
                                <div class="container">
                               
                                    <table class="table is-fullwidth">
                                        <thead>
                                            <tr>
                                                <th>NOMBRE</th>
                                                <th>EDAD</th>
                                                <th>E-MAIL</th>
                                                <th>CÓDIGO</th>
                                                <th>PAÍS</th>
                                                <th>COMITÉ</th>
                                                <th>ESCUELA</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($inscritos as $alumno)
                                                <tr>
                                                    <td>{{ $alumno->nombre }}</td>
                                                    <td>{{ $alumno->edad }}</td>
                                                    <td>{{ $alumno->mail }}</td>
                                                    <td>{{ $alumno->codigo }}</td>
                                                    <td>{{ $alumno->pais }}</td>
                                                    <td>{{ $alumno->comite }}</td>
                                                    <td>{{ $alumno->escuela }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    
                                </div>     
                            </div>
                        </nav>
                    </section>
                    
                </div>
            </div>
        </div>

    </div>

<script src="{{ asset('js/jquery.min.js') }}"></script>
</body>
</html>