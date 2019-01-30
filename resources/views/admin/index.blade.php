@extends('admin.plantilla')
@section('body')

@section('seccion', 'Panel')

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
                                <td>{{ $alumno->nombre }} {{ $alumno->ap_paterno }} {{ $alumno->ap_materno }}</td>
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





@endsection